<?php

namespace App\Repository;

use App\Entity\UsedTool;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsedTool>
 *
 * @method UsedTool|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsedTool|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsedTool[]    findAll()
 * @method UsedTool[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsedToolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsedTool::class);
    }

//    /**
//     * @return UsedTool[] Returns an array of UsedTool objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsedTool
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
