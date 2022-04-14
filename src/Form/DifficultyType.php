<?php

namespace App\Form;

use App\Entity\Difficulty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/* Contrôle */
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/* Types */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DifficultyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        /* ------------------------------------------- NOM ------------------------------------------*/
            ->add('name', TextType::class, [
                'help' => 'Votre nom doit comporter 50 maximum',
                'constraints' => [
                    new NotBlank([ /* Vérifie que le champs ne soit pas vide */
                        'message' => 'Veuillez renseigner votre nom',
                    ]),
                    new Length([ /* Vérifie la taille de la chaine de caractères */
                        'minMessage' => 'Votre nom doit contenir au maximum {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,
                    ]),
                ]
            ])

        /* ------------------------------------------- TIMER ------------------------------------------*/
            ->add('timer', IntegerType::class, [
                'constraints' => [
                    new NotBlank([ /* Vérifie que le champs ne soit pas vide */
                        'message' => 'Veuillez renseigner le temps de votre timer',
                    ]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Difficulty::class,
        ]);
    }
}
