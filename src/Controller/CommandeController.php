<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Detail;
use App\Form\CommandeType;
use App\Repository\PlatRepository;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailService $mailService, UserInterface $user, SessionInterface $session, PlatRepository $plat): Response
    {
        $form = $this->createForm(CommandeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $paniers = $session->get('panier', []);
            $total = 0;

            foreach ($paniers as $key => $value) {
                $p = $plat->find($key);
                $total += $p->getPrix() * $value;
            }

           

            $commande = new Commande();


            $commande = $form->getData();

            $commande->setUser($user);
            $commande->setDateCommande(new \DateTime());
            $commande->setEtat(Commande::ETAT_ENREGISTREE_PAYEE);
            $commande->setTotal($total);
            
           
            foreach ($paniers as $key => $value) {
                $detail= new Detail();
                $detail->setPlat($plat->find($key));
                $detail->setCommande($commande);
                $detail->setQuantite($value);
                $entityManager->persist($detail);

            }

            $entityManager->persist($commande);
            $entityManager->flush();


         
           
        }



        return $this->render('commande/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
