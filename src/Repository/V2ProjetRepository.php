<?php

namespace App\Repository;

use App\Entity\V2Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method V2Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method V2Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method V2Projet[]    findAll()
 * @method V2Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class V2ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, V2Projet::class);
    }

    // /**
    //  * @return V2Projet[] Returns an array of V2Projet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?V2Projet
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
