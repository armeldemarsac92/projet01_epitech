<?php

namespace App\Repository;

use App\Entity\JobOffer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobOffer>
 *
 * @method JobOffer|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobOffer|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobOffer[]    findAll()
 * @method JobOffer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobOfferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobOffer::class);
    }

    public function findByName($searchTerm, $maxResults): array
    {
        $qb = $this->createQueryBuilder('jobOffer')
            ->orderBy('jobOffer.offer_publication_date', 'DESC')
            ->setMaxResults($maxResults);
    
        if ($searchTerm !== null) {
            $qb->andWhere('jobOffer.offer_title LIKE :val')
                ->setParameter('val', '%' . $searchTerm . '%');
        }
    
        return $qb->getQuery()->getResult();
    }

    public function getElementCount($field, $jobOfferId) {
        $qb = $this->createQueryBuilder('jobOffer');
        
        $query = $qb->select('count(a.id)')
                    ->join('jobOffer.' . $field, 'a')
                    ->where('jobOffer.id = :id')
                    ->setParameter('id', $jobOfferId)
                    ->getQuery();

        return $query->getSingleScalarResult();
                            
    }

//    /**
//     * @return JobOffer[] Returns an array of JobOffer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JobOffer
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
