<?php

namespace App\Repository;

use App\Entity\CvCompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvCompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvCompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvCompetence[]    findAll()
 * @method CvCompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvCompetence::class);
    }

    // /**
    //  * @return CvCompetence[] Returns an array of CvCompetence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CvCompetence
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
