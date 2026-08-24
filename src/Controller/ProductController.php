<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Service\PriceCalculator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: '')]
final class ProductController extends AbstractController
{
    #[Route('', name: '')]
    public function index(
        ProductRepository $productRepository,
        PriceCalculator $priceCalculator
    ): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/list.html.twig', [
            'products' => $products,
            'total' => $priceCalculator->sumAll($products),
        ]);
    }
    #[Route('/product/create', name: 'product_create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(123.45);
        $product->setDescription('Description');

        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirectToRoute('');
    }

    #[Route('/product/show/{id}', name: 'product_show')]
    public function show(ProductRepository $productRepository,int $id): Response
    {
        $product = $productRepository->find($id);
        return $this->render('product/show.html.twig', ['product' => $product]);
    }

    #[Route('/product/delete/{id}', name: 'product_delete')]
    public function delete(
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager,
        int $id
    )
    {
        $product = $productRepository->find($id);
        $entityManager->remove($product);
        $entityManager->flush();
        return $this->redirectToRoute('');
    }

    #[Route('/product/update/{id}', name: 'product_update')]
    public function update(
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager,
        int $id
    ): RedirectResponse {
        $product = $productRepository->find($id);
        $product->setPrice($product->getPrice() + 10);
        $entityManager->persist($product);
        $entityManager->flush();
        return $this->redirectToRoute('');
    }

    #[Route('/product/edit/{id}', name: 'product_edit')]
    public function edit(
        Request $request,
        ProductRepository $productRepository,
        EntityManagerInterface $entityManager,
        int $id
    ): Response {
        $product = $productRepository->find($id);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('');
        }

        return $this->render('product/edit.html.twig', ['form' => $form]);
    }
}
