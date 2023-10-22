<?php

namespace App\Repository;

use App\Entity\HasFaved;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HasFaved>
 *
 * @method HasFaved|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasFaved|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasFaved[]    findAll()
 * @method HasFaved[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasFavedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasFaved::class);
    }

    public function findByCandidateAndOffer($candidate, $offerId)
    {
        return $this->createQueryBuilder('a')
            ->innerJoin('a.offer', 'j')
            ->innerJoin('a.candidate', 'c')
            ->where('c.id = :candidateId')
            ->andWhere('j.id = :offerId')
            ->setParameter('candidateId', $candidate->getId())
            ->setParameter('offerId', $offerId)
            ->getQuery()
            ->getOneOrNullResult();
    }

//    /**
//     * @return HasFaved[] Returns an array of HasFaved objects
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

//    public function findOneBySomeField($value): ?HasFaved
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
