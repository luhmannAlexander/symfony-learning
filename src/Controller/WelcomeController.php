<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WelcomeController extends AbstractController
{
    #[Route('/welcome/{username}', name: 'app_welcome')]
    public function index(string $username): Response
    {
        return $this->render('welcome/index.html.twig', [
            'username' => $username,
        ]);
    }
}
