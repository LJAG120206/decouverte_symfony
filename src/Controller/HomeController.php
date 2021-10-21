<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    public function index()
    {
        return new Response("Hello Home!!!!!");
    }

    /**
     * @Route("/home/deux", name="home_deux")
     */
    public function show()
    {
        return new Response("home/show/V2");
    }
}