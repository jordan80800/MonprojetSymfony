<?php

namespace App\Repository;

use App\Entity\Categorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 *
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    public function GetSixMostPopularCat(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c as cat ,SUM(d.quantite) AS quantite_commande')
            ->join('c.plats', 'p')
            ->join('p.details', 'd')
            ->where('c.active = 1')
            ->andWhere('p.active = 1')
            ->groupBy('c.id')
            ->orderBy('quantite_commande', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }
    public function GetPlatsParCategorie(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->join('c.plats', 'p')
            ->where('c.active = 1')
            ->andWhere('p.active = 1')
            ->groupBy('c.id')
            ->getQuery()
            ->getResult();
    }
}
