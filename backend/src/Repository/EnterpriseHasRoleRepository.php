<?php

namespace App\Repository;

use App\Entity\EnterpriseHasRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EnterpriseHasRole>
 *
 * @method EnterpriseHasRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnterpriseHasRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnterpriseHasRole[]    findAll()
 * @method EnterpriseHasRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnterpriseHasRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnterpriseHasRole::class);
    }

//    /**
//     * @return EnterpriseHasRole[] Returns an array of EnterpriseHasRole objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EnterpriseHasRole
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
