<?php

namespace App\Controller;
use App\Entity\CliUser;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('client/index.html.twig', [
            'last_username'=>$lastUsername,
            'error' => $error,
        ]);
    }
    #[Route('/inscrit', name: 'app_inscrit')]
    public function Inscription(Request $req,EntityManagerInterface $entityManager,UserPasswordHasherInterface $passwordHasher): Response
    {

        if($req->isMethod('POST')){
            $email = $req->request->get('email');
            $password = $req->request->get('password');
            $cliUser = new CliUser();
            $cliUser->setEmail($email);
            $hashedPassword = $passwordHasher->hashPassword($cliUser,$password);
            $cliUser->setPassword($hashedPassword);
            $roles = ['ROLE_CLIENT'];
            $cliUser->setRoles($roles);
            $entityManager->persist($cliUser);
            $entityManager->flush();
            return $this->redirectToRoute('app_client');

        }

        return $this->render('client/inscrit.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(){
        $error = "";
        $lastUsername = "";

        return $this->render('login/index.html.twig',[
            'last_username'=> $last_username,
            'error' => $error,
        ]);
    }
}
