<?php

namespace App\Repository;

use App\Entity\ProjetsAfpa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjetsAfpa|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetsAfpa|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetsAfpa[]    findAll()
 * @method ProjetsAfpa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetsAfpaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjetsAfpa::class);
    }

    // /**
    //  * @return ProjetsAfpa[] Returns an array of ProjetsAfpa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjetsAfpa
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
