<?php

namespace App\Repository;

use App\Entity\LafleurContenir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LafleurContenir|null find($id, $lockMode = null, $lockVersion = null)
 * @method LafleurContenir|null findOneBy(array $criteria, array $orderBy = null)
 * @method LafleurContenir[]    findAll()
 * @method LafleurContenir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LafleurContenirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LafleurContenir::class);
    }

    // /**
    //  * @return LafleurContenir[] Returns an array of LafleurContenir objects
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
    public function findOneBySomeField($value): ?LafleurContenir
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
