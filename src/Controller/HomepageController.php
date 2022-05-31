<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(ManagerRegistry $registry): Response
    {
        return $this->render('homepage/index.html.twig', [
            'products' => $registry->getRepository(Product::class)->findAll(),
        ]);
    }
}
