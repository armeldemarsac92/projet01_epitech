<?php

namespace App\Repository;

use App\Entity\UsedCompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsedCompetence>
 *
 * @method UsedCompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsedCompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsedCompetence[]    findAll()
 * @method UsedCompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsedCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsedCompetence::class);
    }

//    /**
//     * @return UsedCompetence[] Returns an array of UsedCompetence objects
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

//    public function findOneBySomeField($value): ?UsedCompetence
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
