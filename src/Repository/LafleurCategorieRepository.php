<?php

namespace App\Repository;

use App\Entity\LafleurCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LafleurCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method LafleurCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method LafleurCategorie[]    findAll()
 * @method LafleurCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LafleurCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LafleurCategorie::class);
    }

    // /**
    //  * @return LafleurCategorie[] Returns an array of LafleurCategorie objects
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
    public function findOneBySomeField($value): ?LafleurCategorie
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
