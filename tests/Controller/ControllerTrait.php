<?php

namespace App\Tests\Controller;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

trait ControllerTrait
{
    private function getRouter(): UrlGeneratorInterface
    {
        return static::getContainer()->get(UrlGeneratorInterface::class);
    }

    private function getUriByRoute(string $route, array $params = []): array|string
    {
        $uri = $this->getRouter()->generate($route, $params, UrlGeneratorInterface::ABSOLUTE_URL);
        $replace = 'http://symfony-learning.localhost';

        return str_replace('http://localhost', $replace, $uri);
    }
}
