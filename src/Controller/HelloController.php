<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/")
     */
    public function hello()
    {
        return new Response('HELLO CLEVER');
    }
}
