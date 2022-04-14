<?php

namespace App\Controller;

use App\Entity\Media;
use App\Repository\ExerciseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/question', name: 'question_')]
class QuestionController extends AbstractController
{
    #[Route('/maker/{id}', name: 'maker')]
    public function questionMaker(Request $request, EntityManagerInterface $manager, ExerciseRepository $exoRepo, int $id): Response
    {
        $question = new Question;
        $form = $this->createFormBuilder($question)
                            ->add('title', TextType::class)
                            ->add('explanation', TextareaType::class, ['required' => false])
                            ->add('image', FileType::class, ['mapped' => false,
                                                             'required' => false,
                                                             'attr' => ['accept' => 'image/*',]
                                                            ])
                            ->add('answer1', TextType::class, ['mapped' => false,])
                            ->add('answer2', TextType::class, ['mapped' => false,])
                            ->add('answer3', TextType::class, ['mapped' => false, 'required' => false])
                            ->add('answer4', TextType::class, ['mapped' => false, 'required' => false])
                            ->add('answer5', TextType::class, ['mapped' => false, 'required' => false])
                            ->add('answer6', TextType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue1', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue2', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue3', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue4', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue5', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->add('isTrue6', CheckboxType::class, ['mapped' => false, 'required' => false])
                            ->getForm();

        $form->handleRequest($request);


        if( $form->isSubmitted() && $form->isValid() ) {
            $answer1 = $form['answer1']->getData();
            $isTrue1 = $form['isTrue1']->getData();
                $answer2 = $form['answer2']->getData();
                $isTrue2 = $form['isTrue2']->getData();
                    $answer3 = $form['answer3']->getData();
                    $isTrue3 = $form['isTrue3']->getData();
                        $answer4 = $form['answer4']->getData();
                        $isTrue4 = $form['isTrue4']->getData();
                            $answer5 = $form['answer5']->getData();
                            $isTrue5 = $form['isTrue5']->getData();
                                $answer6 = $form['answer6']->getData();
                                $isTrue6 = $form['isTrue6']->getData();
       
            $answerArray = [[$answer1 => $isTrue1],
                            [$answer2 => $isTrue2],
                            [$answer3 => $isTrue3],
                            [$answer4 => $isTrue4],
                            [$answer5 => $isTrue5],
                            [$answer6 => $isTrue6],
                        ];
                        
            $image = $form['image']->getData();

            if ( isset($image) && !empty($image) ){

                $extention = $image->guessExtension(); 
                $fichier = uniqid().'.'.$extention;
                $image->move(
                    $this->getParameter('images_directory'), $fichier
                );

                $media = new Media;
                $media->setContent($fichier);
                $media->setFormat($extention);
                
                $question->setMedia($media);
                $manager->persist($media);
            }

            $question->setAnswer($answerArray);

            $exo = $exoRepo->find($id);
            $question->setExercise($exo);
            // Pour stocker en bdd, Doctrine utilise serialize().
            // Pour relire le tableau en sortie de bdd, utiliser unserialize($tableau).
    
            $manager->persist($question);
            $manager->flush();

            // REDIRECTION ?    AFFICHAGE 'Question bien ajoutée'  ?

            return $this->redirectToRoute('app_main_base');
        
            }


        return $this->renderForm('question/maker.html.twig', [
            'form' => $form,
        ]);
    }

}
