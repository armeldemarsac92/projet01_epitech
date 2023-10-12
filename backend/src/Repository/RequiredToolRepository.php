<?php

namespace App\Repository;

use App\Entity\RequiredTool;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequiredTool>
 *
 * @method RequiredTool|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequiredTool|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequiredTool[]    findAll()
 * @method RequiredTool[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequiredToolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequiredTool::class);
    }

//    /**
//     * @return RequiredTool[] Returns an array of RequiredTool objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RequiredTool
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
