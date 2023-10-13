<?php

namespace App\Repository;

use App\Entity\ProfessionnalExperience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProfessionnalExperience>
 *
 * @method ProfessionnalExperience|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfessionnalExperience|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfessionnalExperience[]    findAll()
 * @method ProfessionnalExperience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfessionnalExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfessionnalExperience::class);
    }

//    /**
//     * @return ProfessionnalExperience[] Returns an array of ProfessionnalExperience objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProfessionnalExperience
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
