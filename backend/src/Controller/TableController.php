<?php

namespace App\Controller;

use App\Utils\StringUtils; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class TableController extends AbstractController
{
    #[Route('api/admin/get/database_tables', name: 'fetch_database_tables', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN', statusCode: 403, exceptionCode: 10010)]
    public function FetchDatabaseTables(Connection $connection): Response {
        $tablesData = [];
        $schemaManager = $connection->getSchemaManager();
        $tables = $schemaManager->ListTableNames();
        

        foreach($tables as $table) {
            $sql = 'SELECT COUNT(*) FROM ' .$table;
            $count = $connection->fetchOne($sql);
            $tablesData[] = [
            'name' => $table, 
            'row_count' => (int)$count,
    
        ];

        }
    return $this->json($tablesData);
    }

    #[Route('api/admin/get/table_rows', name: 'fetch_table_rows', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN', statusCode:403, exceptionCode: 10010)]
    public function FetchDatabaseRows(
        Connection $connection,
        #[MapQueryParameter] ?string $tableName = null
        ): JsonResponse {
        try {
            $qb = $connection->createQueryBuilder();
            $qb->select('*')->from($tableName);
            $data = $qb->execute()->FetchAllAssociative();

            return new JsonResponse([$tableName => $data]);   
        } catch (\Exception $e) {
            return $this->json(['error' => 'Error fetching data for the table rows'], 400);
        }
    } 

    #[Route('api/admin/edit/row', name:'edit_table_row', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN', statusCode:403, exceptionCode: 10010)]
    public function editDatabaseRow(
        Connection $connection,
        EntityManagerInterface $entityManager,
        Request $request,
    ): JsonResponse{
        $data = json_decode($request->getContent(), true);
    
        $tableName = $data['table'];
        $row = $data['row'];
    
        $id = $row['id']; 
    
        foreach ($row as $key => $value) {
            if ($key !== 'id') { 
                $sql = "UPDATE $tableName SET $key = :value WHERE id = :id";
                $params = [
                    'value' => $value,
                    'id' => $id
                ];
                $connection->executeStatement($sql, $params);
            }
        }
    
        $qb = $connection->createQueryBuilder();
            $qb->select('*')->from($tableName);
            $data = $qb->execute()->FetchAllAssociative();

            return new JsonResponse([$tableName => $data]); 
    }

    public function snakeToCamelCase($string) {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        return ucfirst($str);
    }


    #[Route('api/admin/delete/row', name:'delete_table_row', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN', statusCode:403, exceptionCode: 10010)]
    public function deleteDatabaseRow(
        Connection $connection,
        EntityManagerInterface $entityManager,
        Request $request,
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $tableNameSnake= $data['table'];
        $id = $data['id'];

        $stringUtils = new StringUtils();
        $tableName = $stringUtils->snakeToCamelCase($tableNameSnake);

        $entity = $entityManager->getRepository($tableName)->findOneBy(['id' => $id]);

        if ($entity) {
            $entityManager->remove($entity);
            $entityManager->flush();
        }

        $queryBuilder = $connection->createQueryBuilder();
        $queryBuilder->select('*')->from($tableName);
        $data = $queryBuilder->execute()->fetchAllAssociative();
    
        return new JsonResponse([$tableName => $data]); 
    }
    


}    