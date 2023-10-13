<?php

namespace App\Repository;

use App\Entity\RequiredCompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RequiredCompetence>
 *
 * @method RequiredCompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequiredCompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequiredCompetence[]    findAll()
 * @method RequiredCompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequiredCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequiredCompetence::class);
    }

//    /**
//     * @return RequiredCompetence[] Returns an array of RequiredCompetence objects
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

//    public function findOneBySomeField($value): ?RequiredCompetence
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
