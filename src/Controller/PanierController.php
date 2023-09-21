<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Service\PanierService;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route('/add/{plat}', name: 'panier_add')]
    public function index(PanierService $panier, SessionInterface $session, Plat $plat): RedirectResponse
    {

        $panier->add($plat, $session);

        return $this->redirectToRoute('panier');
    }











    #[Route('/panier', name: 'panier')]
    public function indexTwo(PlatRepository $repo, SessionInterface $session ,PanierService $ps): Response
    {
        $nouveau=$ps->panier($session, $repo);
        $panier = $session->get("panier", []);


        return $this->render('panier/index.html.twig', [
            'nouveau' => $nouveau,
            'quantite' => $panier
        ]);
    }
}
