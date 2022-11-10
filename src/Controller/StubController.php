<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StubController extends AbstractController
{
    #[Route('/stub', name: 'route_stub')]
    public function stub(): Response
    {
        return new Response(sha1(microtime()));
    }

}