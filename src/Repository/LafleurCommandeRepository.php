<?php

namespace App\Repository;

use App\Entity\LafleurCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LafleurCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method LafleurCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method LafleurCommande[]    findAll()
 * @method LafleurCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LafleurCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LafleurCommande::class);
    }

    // /**
    //  * @return LafleurCommande[] Returns an array of LafleurCommande objects
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
    public function findOneBySomeField($value): ?LafleurCommande
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
