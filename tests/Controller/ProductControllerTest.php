<?php

namespace App\Tests\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ProductControllerTest extends WebTestCase
{
    use ControllerTrait;

    public function testList(): void
    {
        $client = static::createClient();

        /** @var EntityManagerInterface $entityManager */
        $entityManager = static::getContainer()->get( EntityManagerInterface::class);
        for ($i = 0; $i < 10; ++$i) {
            $product = new Product();
            $product->setName('Product ' . $i);
            $product->setPrice(9.99 * $i);
            $entityManager->persist($product);
        }
        $entityManager->flush();
        $uri = $this->getUriByRoute( 'app_product_list');
        $content = $client->request('GET', $uri);
        $html = $content->html();
        self::assertResponseIsSuccessful();
        for ($i = 0; $i < 10; ++$i) {
            self::assertStringContainsString('Product ' . $i,$html);
            self::assertStringContainsString(9.99 * $i,$html);
        }
    }

    public function testCreate(): void
    {
        $client = static::createClient();
        $products = self::getContainer()->get( ProductRepository::class )->findAll();
        self::assertCount( 0, $products );
        $uri = $this->getUriByRoute( 'app_product_create');
        $client->request('GET', $uri);

        self::assertResponseIsSuccessful();
        $products = self::getContainer()->get( ProductRepository::class )->findAll();
        self::assertCount( 1, $products );

        /** @var EntityManagerInterface $entityManager */
        $entityManager = static::getContainer()->get( EntityManagerInterface::class);
        foreach ($products as $product) {
            $entityManager->remove( $product );
        }
        $entityManager->flush();
        $products = self::getContainer()->get( ProductRepository::class )->findAll();
        self::assertCount( 0, $products);

    }


    public function testShow(): void
    {
        $client = static::createClient();

        /** @var EntityManagerInterface $entityManager */
        $entityManager = static::getContainer()->get( EntityManagerInterface::class);
        $product = new Product();
        $name = 'Keyboard';
        $price = 9.99;
        $product->setName($name);
        $product->setPrice($price);
        $entityManager->persist($product);
        $entityManager->flush();

        $uri = $this->getUriByRoute( 'app_product_show', ['id' => $product->getId()]);
        $content = $client->request('GET', $uri);
        $html = $content->html();
        self::assertResponseIsSuccessful();

        self::assertStringContainsString($name,$html);
        self::assertStringContainsString($price,$html);

    }
}
