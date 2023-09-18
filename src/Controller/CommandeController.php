<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\User;
use App\Form\CommandeType;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use App\Repository\UserRepository;


class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailService $mailService, UserRepository $user): Response
    {
        $form = $this->createForm(CommandeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $this->getUser();



            $data = $form->getData();

            $mailService->sendMailCommande(
                $user->getEmail(),
                $user->getNom(),
                $user->getPrenom()

            );
        }

// foreach(){ 


// $commande = new Commande ;
// }


        return $this->render('commande/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
