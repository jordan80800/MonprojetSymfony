<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;




class PlatsController extends AbstractController
{
    private $categories;
    public function __construct(CategorieRepository $categories)
    {
        $this->categories = $categories;
    }

    #[Route('/plats', name: 'app_plats')]
    public function index(): Response
    {

        $categories = $this->categories->GetPlatsParCategorie();
        return $this->render('plats/index.html.twig', [
            'controller_name' => 'PlatsController',
            'categories' => $categories,

        ]);
    }
}
