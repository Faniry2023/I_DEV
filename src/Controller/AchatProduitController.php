<?php

namespace App\Controller;
use App\Entity\Produits;
use App\Entity\Commande;
use App\Entity\MyBank;
use App\Entity\CliUser;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MyBankRepository;
use App\Repository\CommandeRepository;
use App\Repository\CliUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class AchatProduitController extends AbstractController
{
    private $httpClient;
    private $httpentityManager;
    public $id_tuto;
    public function __construct(HttpClientInterface $httpClient, EntityManagerInterface $httpentityManager){
        $this->httpClient = $httpClient;
        $this->httpentityManager = $httpentityManager;
    }

    #[Route('/achat/produit/{id}', name: 'app_achat_produit')]
    public function index(Request $req,EntityManagerInterface $entityManager,ProduitsRepository  $ProduitRepository,string $id): Response
    {
        $tuto = $ProduitRepository->findOneById($id);
        $leClient = $this->getUser();
        $testId = "0";
        $msg = "Desole, l'achat est interrompu, peut etre que vous compte est insufisant pour cette formation";
        $testId = $leClient->getId();
        if($req->isMethod('POST')){
            $myBank = new MyBank();
            $emailbank = $req->request->get('email');
            $numBank = $req->request->get('bank');
            $mdpBank = $req->request->get('mdp');
            $prix = $tuto->getPrix();
            $url = "https://localhost:7075/api/api/GetRetireSolde";
            $api = $this->httpClient->request('GET','https://localhost:7075/api/api/GetRetireSolde/'.$numBank.'/'.$mdpBank.'/'.$prix);
            if($api->getStatusCode() !== 200 || $api == null){
                return $this->render('achat_produit/index.html.twig', [
                    'controller_name' => 'AchatProduitController',
                    'tuto' => $tuto,
                    'msg' => $msg,
                ]);
            }
            //Creation du commande
            $commande = new Commande();
            $idCli = $leClient->getId();
            $idTuto = $tuto->getId();
            $commande->setIdClient($idCli);
            $commande->setIdTuto($idTuto);
            $entityManager->persist($commande);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_achat_merci',[
                'tuto' => $tuto,
                'id' => $idTuto,
                'msg' => $msg,
            ]);

        }
        return $this->render('achat_produit/index.html.twig', [
            'controller_name' => 'AchatProduitController',
            'tuto' => $tuto,
            'msg' => "",
        ]);
    }
    #[Route('/achat/produit{id}', name: 'app_achat_merci')]
    public function Merci(ProduitsRepository  $ProduitRepository,string $id): Response
    {
        $tuto = $ProduitRepository->findOneById($id);
        $leClient = $this->getUser();
        

        return $this->render('achat_produit/Merci.html.twig', [
            'controller_name' => 'AchatProduitController',
            'tuto' => $tuto,
            'msg' => "",
        ]);
    }
}
