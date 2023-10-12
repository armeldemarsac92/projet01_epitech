<?php

namespace App\Repository;

use App\Entity\HasCertification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HasCertification>
 *
 * @method HasCertification|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasCertification|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasCertification[]    findAll()
 * @method HasCertification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasCertificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasCertification::class);
    }

//    /**
//     * @return HasCertification[] Returns an array of HasCertification objects
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

//    public function findOneBySomeField($value): ?HasCertification
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
