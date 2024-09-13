<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\CliUser;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TutoController extends AbstractController
{

    #[Route('/tuto/{id}', name: 'app_tuto_details')]
    public function view(ProduitsRepository  $entityManager,int $id): Response
    {
        //$product = $entityManager->getRepository(Tuto::class)->find($id);
        $tuto = $entityManager->findOneById($id);
        $user = $this->getUser();
        if(!$tuto){
            return $this->redirectToRoute('app_home');
        }
        return $this->render('tuto/details.html.twig', [
            'tuto' => $tuto,
        ]);
    }



    #[Route('/tuto/{id}', name: 'app_tuto')]
    public function index(TutoRepository $productRepository,int $id): Response
    {
        //$product = $entityManager->getRepository(Tuto::class)->find($id);
        $product = $productRepository->findOneById($id);
        if(!$product){
            throw $this->createNotFoundException('no product for id '.$id);
        }
        return $this->render('tuto/index.html.twig', [
            'controller_name' => 'TutoController',
            'name' => $product->getName(),
        ]);
    }


    #[Route('/add-tuto', name: 'create_tuto')]
    public function createTuto(EntityManagerInterface $entityManager) : Response{
        $product = new Tuto();
        $product->setName('Unity');
        $product->setSubtitle('Formation sur le jeu video');
        $product->setDescription('cette formation est le plus cool de tout les autres formation car on t explique on dettaille tout');
        $product->setImage('assets/img/az.jpg');

        $entityManager->persist($product);
        $entityManager->flush();
        return new Response('Save new product with id : '.$product->getId());
    }
}
