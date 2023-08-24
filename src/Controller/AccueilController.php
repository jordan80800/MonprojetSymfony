<?php

namespace App\Controller;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    private $plat;
    private $categorie;

    public function __construct(PlatRepository $plat, CategorieRepository $categorie)
    {
        $this->plat = $plat;
        $this->categorie = $categorie;
    }


    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        
        $categories = $this->categorie->GetSixMostPopularCat();
        $plat = $this->plat->GetThreeMostPopularPLat();



        return $this->render('accueil/index.html.twig', [
            'categories' => $categories,
            'plat' => $plat,

        ]);
    }
}
