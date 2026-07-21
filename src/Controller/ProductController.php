<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/product/', name: 'app_product_')]
final class ProductController extends AbstractController
{
    #[Route('/list', name: 'list')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/list.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route('/create', name: 'create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(123.45);
        $product->setDescription('Description');

        $entityManager->persist($product);
        $entityManager->flush();

        return $this->render('product/list.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/{id}', name: 'show')]
    public function show(ProductRepository $productRepository,int $id): Response
    {
        $product = $productRepository->find($id);
        return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
