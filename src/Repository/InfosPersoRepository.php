<?php

namespace App\Repository;

use App\Entity\InfosPerso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfosPerso|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosPerso|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosPerso[]    findAll()
 * @method InfosPerso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosPersoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosPerso::class);
    }

    // /**
    //  * @return InfosPerso[] Returns an array of InfosPerso objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfosPerso
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
