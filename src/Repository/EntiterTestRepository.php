<?php

namespace App\Repository;

use App\Entity\EntiterTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EntiterTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntiterTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntiterTest[]    findAll()
 * @method EntiterTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntiterTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntiterTest::class);
    }

    // /**
    //  * @return EntiterTest[] Returns an array of EntiterTest objects
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
    public function findOneBySomeField($value): ?EntiterTest
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
