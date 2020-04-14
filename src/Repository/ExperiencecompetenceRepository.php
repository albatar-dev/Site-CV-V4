<?php

namespace App\Repository;

use App\Entity\Experiencecompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Experiencecompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experiencecompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experiencecompetence[]    findAll()
 * @method Experiencecompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperiencecompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experiencecompetence::class);
    }

    // /**
    //  * @return Experiencecompetence[] Returns an array of Experiencecompetence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Experiencecompetence
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
