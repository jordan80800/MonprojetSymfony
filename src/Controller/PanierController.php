<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    #[Route('/add/{plat}', name: 'panier_add')]
    public function add(SessionInterface $session, Plat $plat, Request $request): Response
    {
        $panier = $session->get('panier', []);
        if (isset($panier[$plat->getId()])) {
            $panier[$plat->getId()]++;
        } else {
            $panier[$plat->getId()] = 1;
        }
        $session->set("panier", $panier);

        return $this->redirect("/panier");
    }





    #[Route('/panier', name: 'panier')]


    public function panier(SessionInterface $session, PlatRepository $repo): Response
    {
        $panier = $session->get("panier", []);
        $nouveau = [];

        foreach ($panier as $key => $value) {
            $p = $repo->find($key);
            $nouveau[] = $p;
            // dd($nouveau);
        }
        return $this->render('panier/index.html.twig', [
            'nouveau' => $nouveau,
            'quantite' => $panier,
        ]);
    }
}
