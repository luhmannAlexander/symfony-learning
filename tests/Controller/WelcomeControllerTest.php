<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class WelcomeControllerTest extends WebTestCase
{
    use ControllerTrait;

    public function testIndex(): void
    {
        $client = static::createClient();
        static::getContainer()->get(UrlGeneratorInterface::class);

        $username = 'Alex';
        $uri = $this->getUriByRoute( 'app_welcome',[
            'username' => $username
        ]);
        $content = $client->request('GET', $uri);

        self::assertResponseIsSuccessful();
        self::assertStringContainsString('Alex',$content->html());
    }
}
