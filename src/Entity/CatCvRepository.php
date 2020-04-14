<?php

namespace App\Entity;

use App\Entity\CatCv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CatCv|null find($id, $lockMode = null, $lockVersion = null)
 * @method CatCv|null findOneBy(array $criteria, array $orderBy = null)
 * @method CatCv[]    findAll()
 * @method CatCv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatCvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatCv::class);
    }

    // /**
    //  * @return CatCv[] Returns an array of CatCv objects
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
    public function findOneBySomeField($value): ?CatCv
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
