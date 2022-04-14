<?php

namespace App\Controller;

use App\Entity\Result;
use App\Form\ResultType;
use App\Repository\ResultRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/* ------------------------------------------------------- Route RESULT (Principal) ------------------------------------------------------*/
#[IsGranted('ROLE_FORMATEUR')]
#[Route('/result', name: 'app_result_')]
class ResultController extends AbstractController
{

/* ---------------------------------------------------------- Route RESULT (Home) --------------------------------------------------------*/

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ResultRepository $resultRepository): Response
    {
        // Déclaration de la variable 'average'
        $average = [];
        
    // --------------------------------------------------------------------
        
        // Fonction pour calculer le total des moyennes (moyenne de classe)
        function getAverage(array $average){
            $somme = 0;
            foreach($average as $note){
              $somme =  $somme + $note;
            }
            return $moyenne=($somme / count($average));
        };

    // --------------------------------------------------------------------
        
        // Fonction pour calculer la moyenne de chaque élève (par son ID)
        function getAverageById(array $average){
            $somme = 0;
            $tableau = [];
            // parcourir l'entité + récupération de notes
            foreach($average as $notes){
            array_push($tableau, $notes['grades']);
            }
            // fait la moyenne des notes
            foreach($tableau as $note){
            $somme =  $somme + $note;
            }
            return $moyenne=($somme / count($average));
        };

    //---------------------------------------------------------------------
        
        // Foreach pour aller récupérer toutes les notes pour calculer la moyenne de classe
        foreach($resultRepository->findAll() as $resultEntity) {
            $average[]=$resultEntity->getGrades();
        }
        // Varaible pour calculer le total des moyennes (moyenne de classe)
        //dd(getAverage($average));

    //---------------------------------------------------------------------
        
        // Variable pour calculer la moyenne des apprenants (par ID)
        $ApprenantMoyenne = $resultRepository->findAllinUser(1);
        // Calcul de la moyenne des apprenants
        //dd(getAverageById($ApprenantMoyenne));


        return $this->render('result/index.html.twig', [
            'results' => $resultRepository->findAll(),
        ]);
    }

/* ------------------------------------------------- Route RESULT (Création résultat) ---------------------------------------------------*/

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, ResultRepository $resultRepository): Response
    {
        $result = new Result();
        $form = $this->createForm(ResultType::class, $result);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $result->setUpdateAt(new \DateTime());
            $result->setUser($form->get('user')->getData());
            $result->setExercise($form->get('exercise')->getData());
            $resultRepository->add($result);
            return $this->redirectToRoute('app_result_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('result/new.html.twig', [
            'result' => $result,
            'form' => $form,
        ]);
    }

/* --------------------------------------------------- Route RESULT (Voir résultat) ------------------------------------------------------*/

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Result $result): Response
    {
        return $this->render('result/show.html.twig', [
            'result' => $result,
        ]);
    }

/* ------------------------------------------------ Route RESULT (Modifiaction résultat) -------------------------------------------------*/

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Result $result, ResultRepository $resultRepository): Response
    {
        $form = $this->createForm(ResultType::class, $result);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $result->setUpdateAt(new \DateTime());
            $resultRepository->add($result);
            return $this->redirectToRoute('app_result_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('result/edit.html.twig', [
            'result' => $result,
            'form' => $form,
        ]);
    }

/* ------------------------------------------------ Route RESULT (Suppression résultat) --------------------------------------------------*/

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Result $result, ResultRepository $resultRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$result->getId(), $request->request->get('_token'))) {
            $resultRepository->remove($result);
        }

        return $this->redirectToRoute('app_result_index', [], Response::HTTP_SEE_OTHER);
    }

}
