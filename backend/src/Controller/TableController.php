<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        ): Response {
        try {
            $qb = $connection->createQueryBuilder();
            $qb->select('*')->from($tableName);
            $data = $qb->execute()->FetchAllAssociative();

            return $this->json($data);   
        } catch (\Exception $e) {
            return $this->json(['error' => 'Error fetching data for the table rows'], 400);
        }
    } 
}