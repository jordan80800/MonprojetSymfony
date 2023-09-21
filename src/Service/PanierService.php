<?php

namespace App\Service;

use App\Entity\Plat;
use App\Repository\PlatRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class PanierService
{

    public function add(Plat $plat, SessionInterface $session)
    {
        $panier = $session->get('panier', []);
        if (isset($panier[$plat->getId()])) {
            $panier[$plat->getId()]++;
        } else {
            $panier[$plat->getId()] = 1;
        }
        $session->set("panier", $panier);
    }



    public function panier(SessionInterface $session, PlatRepository $repo)
    {
        $panier = $session->get("panier", []);
        $nouveau = [];

        foreach ($panier as $key => $value) {
            $p = $repo->find($key);
            $nouveau[] = $p;
        }
        return $nouveau;

    }
}
