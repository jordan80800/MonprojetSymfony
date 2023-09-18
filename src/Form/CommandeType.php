<?php

namespace App\Form;
use App\Entity\user;
use App\Entity\Commande;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('MoyenDePayement', ChoiceType::class, [
      
            'mapped' => false,
            'choices'  => [
                'Liquide' => null,
                'cheque' => true,
                'carte' => false,
            ],
            
        ])        ->add('AdresseDeLivraison', TextType::class, ['label' => 'Adresse De Livraison'])


        ->add('AdresseDeFacturation', TextType::class, [
      
            'mapped' => false,
            
        ])      

    
        ->add('save', SubmitType::class, ['label' => 'Commander']);        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
