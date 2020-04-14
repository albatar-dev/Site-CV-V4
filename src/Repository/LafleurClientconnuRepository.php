<?php

namespace App\Repository;

use App\Entity\LafleurClientconnu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LafleurClientconnu|null find($id, $lockMode = null, $lockVersion = null)
 * @method LafleurClientconnu|null findOneBy(array $criteria, array $orderBy = null)
 * @method LafleurClientconnu[]    findAll()
 * @method LafleurClientconnu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LafleurClientconnuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LafleurClientconnu::class);
    }

    // /**
    //  * @return LafleurClientconnu[] Returns an array of LafleurClientconnu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LafleurClientconnu
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
