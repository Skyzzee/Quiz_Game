<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/* Contrôle */
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/* Types */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        /* ------------------------------------------- EMAIL ------------------------------------------*/
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank([ /* Vérifie que le champs ne soit pas vide */
                        'message' => 'Veuillez renseigner votre Email',
                    ]),
                ]
            ])

        /* ------------------------------------------- NOM ------------------------------------------*/
            ->add('name', TextType::class, [
                'help' => 'Votre Nom doit comporter 2 caractères minimum 50 maximum',
                'constraints' => [
                    new NotBlank([ /* Vérifie que le champs ne soit pas vide */
                        'message' => 'Veuillez renseigner votre Nom',
                    ]),
                    new Length([ /* Vérifie la taille de la chaine de caractères */
                        'min' => 2,
                        'minMessage' => 'Votre Nom doit contenir au minimum {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,
                    
                    ]),
                ]
            ])

        /* ------------------------------------------- PRENOM ------------------------------------------*/
            ->add('firstname', TextType::class, [
                'help' => 'Votre Prénom doit comporter 2 caractères minimum 50 maximum',
                'constraints' => [
                    new NotBlank([ /* Vérifie que le champs ne soit pas vide */
                        'message' => 'Veuillez renseigner votre Prénom',
                    ]),
                    new Length([ /* Vérifie la taille de la chaine de caractères */
                        'min' => 2,
                        'minMessage' => 'Votre Prénom doit contenir au minimum {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,
                    
                    ]),
                ]
            ])

        /* ------------------------------------------- ROLE ------------------------------------------*/
            ->add('roles', ChoiceType::class, [
                'placeholder' => 'Veuillez choisir un role',
                'required' => true, /* Obligatoirement 1 rôle*/
                'multiple' => false, /* Ne peux choisir qu'un rôle */
                'expanded' => false, /* false => Select / true => Checkbox */
                'choices' => [ 
                    /* Les choix de rôle proposés */
                    'FORMATEUR' => 'ROLE_FORMATEUR',
                    'APPRENANT' => 'ROLE_APPRENANT',
                    'USER' => 'ROLE_USER'
                ]
            ])
        ;

        /* ----------------------------- Methode qui permet le passage de array à string et string à array -------------------------------*/
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                // Passage de type array en string
                function ($rolesArray) {
                    return count($rolesArray)? $rolesArray[0]: null;
                },
                // Passage de type string en type array
                function ($rolesString) {
                    return [$rolesString];
                }
            ));  
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
