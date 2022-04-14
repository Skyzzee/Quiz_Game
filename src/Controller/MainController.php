<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\RegistrationFormType;
use App\Recaptcha\RecaptchaValidator;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

// Import Google Recaptcha
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/* ---------------------------------------------------- Route MAIN (Principal) ---------------------------------------------------------*/

#[Route('/', name: 'app_main_')]
class MainController extends AbstractController
{

/* ---------------------------------------------------------- Route MAIN (Home) --------------------------------------------------------*/

    #[Route('/', name: 'base')]
    public function index(): Response
    {
        
        return $this->render('main/index.html.twig');
    }

/* ---------------------------------------------------- Route MAIN (Création de quiz) --------------------------------------------------*/
    #[IsGranted('ROLE_FORMATEUR')]
    #[Route('/quiz', name: 'quiz')]
    public function quiz(): Response
    {
        return $this->render('main/quiz.html.twig');
    }

/* ------------------------------------------------ Route MAIN (Inscription utilisateur) -----------------------------------------------*/

    #[Route('/inscription', name: 'register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, RecaptchaValidator $recaptcha): Response
    {   

        $form = $this->createForm(RegistrationFormType::class);
        $form->handleRequest($request);

        /****  Première vérification à la soummission du formulaire pour vérifier si le Google Recaptcha est correctement validé  ****/
        if ($form->isSubmitted()) {

            // Récupération de la réponse envoyée par le captcha dans le formulaire
            $recaptchaResponse = $request->request->get('g-recaptcha-response', null);

            // Si le captcha n'est pas valide, on crée une nouvelle erreur dans le formulaire
            // $request->server->get('REMOTE_ADDR') -----> Adresse IP de l'utilisateur dont la méthode verify() a besoin
            if ($recaptchaResponse == null || !$recaptcha->verify( $recaptchaResponse, $request->server->get('REMOTE_ADDR') )){

                // Ajout d'une nouvelle erreur manuellement dans le formulaire
                $form->addError(new FormError('Le Captcha doit être validé !'));
            }

            
            /****  Seconde vérification sur la validité des éléments du formulaire après vérification du Google Recaptcha  ****/
            if( $form->isValid()) {

                if ($this->getUser()) {
                    return $this->redirectToRoute('app_main_base');
                }
        
                $user = new User();
                $form = $this->createForm(RegistrationFormType::class, $user);
                $form->handleRequest($request);
        
                if ($form->isSubmitted() && $form->isValid()) {
                    
                    $user->setPassword(
                    $userPasswordHasher->hashPassword(
                            $user,
                            $form->get('plainPassword')->getData()
                        )
                    );
        
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
        
                    return $this->redirectToRoute('app_main_login');
                }
        
                return $this->render('main/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }
        }           
        return $this->renderForm('main/register.html.twig', [
            'form' => $form]);
    }

/* ------------------------------------------------ Route MAIN (Connexion utilisateur) ------------------------------------------------*/

    #[Route(path: '/connexion', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_main_base');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('main/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

/* ------------------------------------------------ Route MAIN (Déconnexion utilisateur) ----------------------------------------------*/

    #[Route(path: '/deconnexion', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

/* ------------------------------------------------ Route MAIN (Faux lancement d'un quizz) ----------------------------------------------*/

    #[Route(path: '/play', name: 'play')]
    public function play()
    {
        return $this->render('play.html.twig');
    }

}

