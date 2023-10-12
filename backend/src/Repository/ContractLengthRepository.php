<?php

namespace App\Repository;

use App\Entity\ContractLength;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractLength>
 *
 * @method ContractLength|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractLength|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractLength[]    findAll()
 * @method ContractLength[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractLengthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractLength::class);
    }

//    /**
//     * @return ContractLength[] Returns an array of ContractLength objects
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

//    public function findOneBySomeField($value): ?ContractLength
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
