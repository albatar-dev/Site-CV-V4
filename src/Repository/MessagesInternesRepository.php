<?php

namespace App\Repository;

use App\Entity\MessagesInternes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MessagesInternes|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessagesInternes|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessagesInternes[]    findAll()
 * @method MessagesInternes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessagesInternesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessagesInternes::class);
    }

    // /**
    //  * @return MessagesInternes[] Returns an array of MessagesInternes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MessagesInternes
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
