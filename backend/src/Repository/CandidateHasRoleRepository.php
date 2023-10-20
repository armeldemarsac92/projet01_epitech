<?php

namespace App\Repository;

use App\Entity\CandidateHasRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CandidateHasRole>
 *
 * @method CandidateHasRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method CandidateHasRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method CandidateHasRole[]    findAll()
 * @method CandidateHasRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidateHasRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CandidateHasRole::class);
    }

//    /**
//     * @return CandidateHasRole[] Returns an array of CandidateHasRole objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CandidateHasRole
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
