<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
use App\Service\JWTService;
use App\Form\RegistrationFormType;
use App\Service\SendEmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, JWTService $jwt, SendEmailService $sendEmail): Response
    {
        $user = new Client();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setMotDePasse($userPasswordHasher->hashPassword($user, $plainPassword));

            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email
            $header = [
                'alg' => 'HS256',
                'typ' => 'JWT'
            ];
            //payload
            $payload = [
                'user_id' => $user->getId()
            ];

            //générer le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));
            //Envoyer l'email
            $sendEmail->send(
                'no_reply@VillageGreen.test',
                $user->getEmail(),
                'Activation de votre compte client Village Green',
                'inscription',
                compact('user', 'token') //= ['user' => $user, 'token' => $token]
            );

            $this->addFlash('success', 'Utilisateur inscrit! mail de vérification envoyé.');
            return $this->redirectToRoute('app_accueil');
        }

        return $this->render('inscription/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
    #[Route('/verif/{token}', name: 'verify_user')]
    public function verifUser($token, JWTService $jwt, ClientRepository $clientRepository, EntityManagerInterface $em ) : Response
    {
        // on vérifie le token (cohérent, pas expiré et signature ok)
        if($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))){
            //le token est valide
            //on récupère les données(payload)
            $payload = $jwt->getPayload($token);

            //on récupère le user
            $user = $clientRepository->find($payload['user_id']);

            // on vérifie qu'on a bien un user et qu'il n'est pas encore activé 

            if($user && !$user->isVerified()){
                $user->setIsVerified(true);
                $em->flush();

                $this->addFlash('success', 'Utilisateur vérifié');
                return $this->redirectToRoute('app_accueil');
            }
        }
        $this->addFlash('danger', 'Le token est invalide ou a expiré');
                return $this->redirectToRoute('app_accueil');
    }

}
