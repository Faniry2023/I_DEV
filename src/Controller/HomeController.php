<?php

namespace App\Controller;
use App\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $tuto = $entityManager->getRepository(Produits::class)->findAll();
        
        return $this->render('home/index.html.twig', [
            'tutos' => $tuto,
        ]);
    }
}
