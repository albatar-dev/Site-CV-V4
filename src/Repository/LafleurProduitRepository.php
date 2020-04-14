<?php

namespace App\Repository;

use App\Entity\LafleurProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LafleurProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method LafleurProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method LafleurProduit[]    findAll()
 * @method LafleurProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LafleurProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LafleurProduit::class);
    }

    // /**
    //  * @return LafleurProduit[] Returns an array of LafleurProduit objects
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
    public function findOneBySomeField($value): ?LafleurProduit
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
