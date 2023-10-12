<?php

namespace App\Repository;

use App\Entity\SpeaksLanguage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SpeaksLanguage>
 *
 * @method SpeaksLanguage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpeaksLanguage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpeaksLanguage[]    findAll()
 * @method SpeaksLanguage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpeaksLanguageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpeaksLanguage::class);
    }

//    /**
//     * @return SpeaksLanguage[] Returns an array of SpeaksLanguage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SpeaksLanguage
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
