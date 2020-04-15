<?php

namespace App\Repository;

use App\Entity\CatCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CatCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method CatCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method CatCode[]    findAll()
 * @method CatCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatCodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatCode::class);
    }

    // /**
    //  * @return CatCode[] Returns an array of CatCode objects
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
    public function findOneBySomeField($value): ?CatCode
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
