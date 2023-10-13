<?php

namespace App\Repository;

use App\Entity\HasHobby;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HasHobby>
 *
 * @method HasHobby|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasHobby|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasHobby[]    findAll()
 * @method HasHobby[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasHobbyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasHobby::class);
    }

//    /**
//     * @return HasHobby[] Returns an array of HasHobby objects
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

//    public function findOneBySomeField($value): ?HasHobby
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
