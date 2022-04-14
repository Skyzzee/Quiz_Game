<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Exercise;
use App\Entity\Difficulty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExerciseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('category', EntityType::class, [
    
                    'label' => 'Category',
                    'attr' => ['class' => 'form-control'],
                    'placeholder' => 'Choisir une catégorie',
                    'class' => Category::class,
                    'choice_label' => 'name'
            ])
            ->add('difficulty', EntityType::class, [
    
                'label' => 'Difficulty',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Choisir une difficulté',
                'class' => Difficulty::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exercise::class,
        ]);
    }
}
