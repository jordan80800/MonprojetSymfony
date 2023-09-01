<?php

namespace App\Controller;

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailService $mailService): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $message = new Contact();

            $data = $form ->getData();
            $message = $data;

$mailService->sendMail(
            $data->getEmail(), 
            $data->getObjet(),
             $data->getMessage() );    
             $entityManager->persist($message);
             $entityManager->flush();
        }

    

            return $this->render('contact/index.html.twig', [
                'form' => $form->createView(),
            ]);

        }

    }