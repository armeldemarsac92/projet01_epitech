<?php

namespace App\Repository;

use App\Entity\HasContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HasContract>
 *
 * @method HasContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasContract[]    findAll()
 * @method HasContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasContract::class);
    }

//    /**
//     * @return HasContract[] Returns an array of HasContract objects
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

//    public function findOneBySomeField($value): ?HasContract
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
