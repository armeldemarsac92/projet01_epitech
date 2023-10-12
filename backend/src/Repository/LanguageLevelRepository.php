<?php

namespace App\Repository;

use App\Entity\LanguageLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LanguageLevel>
 *
 * @method LanguageLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method LanguageLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method LanguageLevel[]    findAll()
 * @method LanguageLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageLevelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LanguageLevel::class);
    }

//    /**
//     * @return LanguageLevel[] Returns an array of LanguageLevel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LanguageLevel
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
