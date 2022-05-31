<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;

class ProductController extends AbstractController
{
    /**
     * @Route("/produit/{identifier}/voir", name="app_product")
     */
    public function index(string $identifier, ManagerRegistry $registry): Response
    {
        $product = $registry->getRepository(Product::class)->findOneBy(['uuid' => Uuid::fromBase58($identifier)]);

        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }
}
