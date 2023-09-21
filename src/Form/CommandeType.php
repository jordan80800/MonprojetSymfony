<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('AdresseDeFacturation', TextType::class, [])
            ->add('MoyenDePayement', ChoiceType::class, [
                'choices'  => [
                    'liquide' => 'liquide',
                    'cheque' => 'cheque',
                    'carte' => 'carte',
                ],

            ])

            ->add('AdresseDeLivraison', TextType::class, ['label' => 'Adresse De Livraison'])

            ->add('save', SubmitType::class, ['label' => 'Commander']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
