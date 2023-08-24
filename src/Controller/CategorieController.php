<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;

class CategorieController extends AbstractController
{
    private $categories;
    private $plats;

    public function __construct(CategorieRepository $categories, PlatRepository $plats)
    {
        $this->categories = $categories;
        $this->plats = $plats;
    }

    #[Route('/categorie', name: 'app_categorie')]
    public function index(): Response
    {
        $categories = $this->categories->findAll();
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie/{id}', name: 'app_categorie.id')]
    public function platsparcat($id): Response
    {
        $plats = $this->plats->findBy(['id_categorie' => $id]);
        return $this->render('categorie/plats.cat.html.twig', [
            'controller_name' => 'CategorieController',
            'plats' => $plats,
        ]);
    }
}
