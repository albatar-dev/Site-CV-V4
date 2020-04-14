<?php

namespace App\Repository;

use App\Entity\GradeUsr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GradeUsr|null find($id, $lockMode = null, $lockVersion = null)
 * @method GradeUsr|null findOneBy(array $criteria, array $orderBy = null)
 * @method GradeUsr[]    findAll()
 * @method GradeUsr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GradeUsrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GradeUsr::class);
    }

    // /**
    //  * @return GradeUsr[] Returns an array of GradeUsr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GradeUsr
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
