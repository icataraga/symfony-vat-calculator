<?php

namespace App\Repository;

use App\Entity\Vat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @extends ServiceEntityRepository<Vat>
 *
 * @method Vat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vat[]    findAll()
 * @method Vat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vat::class);
    }

    public function add(Vat $entity, bool $flush = false): void
    


{
	$this->getEntityManager ()->persist ( $entity );
	
	if ($flush) {
		$this->getEntityManager ()->flush ();
	}
}

    public function remove(Vat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
     /**
      * @return Vat[] Returns an array of Vat objects
      */
     public function deleteAllVatRecords(bool $flush = false) : void
     {
          $this->createQueryBuilder('v')
                 ->delete()
                 ->getQuery()
                 ->execute();
           if ($flush) {
              $this->getEntityManager()->flush();
           }
     }
     
     /**
      * @return Vat[] Returns an array of Vat objects
      */
     public function exchangeDataToArray(bool $flush = false)
     {
     	return $this->createQueryBuilder('v')
     	->getQuery()->getResult(Query::HYDRATE_ARRAY);
     	if ($flush) {
     		$this->getEntityManager()->flush();
     	}
     }
    

//    /**
//     * @return Vat[] Returns an array of Vat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vat
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
