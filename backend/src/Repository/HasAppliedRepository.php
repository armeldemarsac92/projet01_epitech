<?php

namespace App\Repository;

use App\Entity\HasApplied;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HasApplied>
 *
 * @method HasApplied|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasApplied|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasApplied[]    findAll()
 * @method HasApplied[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasAppliedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasApplied::class);
    }

//    /**
//     * @return HasApplied[] Returns an array of HasApplied objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HasApplied
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
