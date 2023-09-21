<?php

namespace App\EventSubscriber;

use App\Repository\CommandeRepository;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CommandeSubscriber implements EventSubscriber
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getSubscribedEvents()
    {
        //retourne un tableau d'événements (prePersist, postPersist, preUpdate etc...)
        return [
            //événement déclenché après l'insert dans la base de donnée
            Events::postPersist,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        //        $args->getObject() nous retourne l'entité concernée par l'événement postPersist
        $entity = $args->getObject();

        if ($entity instanceof \App\Entity\Commande) {


            $email = (new Email())
                ->from('District@Service.com')
                ->to('admin@velvet.com')
                ->subject('Votre Commande')
                
                ->text("Votre Commande n° : " . $entity->getId() ."\nVous avez  payer en : " . $entity->getMoyenDePayement() . "\nVous avez payé un total de : " . $entity->getTotal() . "€" . "\nVous serez donc livré comme convenu à l'adresse suivante : " . $entity->getAdresseDeLivraison());

            $this->mailer->send($email);
        }
    }
}
