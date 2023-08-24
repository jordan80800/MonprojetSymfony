<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plat>
 *
 * @method Plat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plat[]    findAll()
 * @method Plat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }
    public function GetThreeMostPopularPLat(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p as plat, SUM(d.quantite) AS quantite_total')
            ->join('p.details', 'd')
            ->where('p.active = 1')
            ->groupBy('p.id')
            ->orderBy('quantite_total', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
}
