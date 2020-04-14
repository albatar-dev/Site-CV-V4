<?php

namespace App\Repository;

use App\Entity\ScreensJeux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ScreensJeux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScreensJeux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScreensJeux[]    findAll()
 * @method ScreensJeux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScreensJeuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScreensJeux::class);
    }

    // /**
    //  * @return ScreensJeux[] Returns an array of ScreensJeux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ScreensJeux
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
