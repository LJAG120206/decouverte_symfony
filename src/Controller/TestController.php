<?php

namespace App\Controller; //App pour la racine de l'appli et Controller où on est

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route; //générée par les lignes 10 à 12
use Symfony\Component\HttpFoundation\Response; 

class TestController extends AbstractController // la class doit porter le même nom que le fichier, c'est normalisé
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return new Response("Hello World!"); //. Génère le use Response
    }


    /**
     * @Route("/test/show", name="test_show")
     */
    public function show()
    {
        $names = ["alexis", "thierry", "anthony"];
        return $this->render('test/show.html.twig', [
            'age'   => 20,
            'names' => $names
        ]);
    }

    /**
     * @Route("/test/see", name="test-see")
     */
    public function see()
    {
        $trainees = [
            ["tomg","22"],
            ["toma", "23"],
            ["thierry", "18"],
            ["michael", "31"],
            ["marc", "38"],
            ["loic", "52"],
            ["clavin", "25"],
            ["anthony", "34"],
            ["amanda", "33"],
            ["alexis", "31"]
        ];
        $ageMore = rand(35, 45);
        $ageLess = 25;

        return $this-> render('test/see.html.twig', [
            "trainees" => $trainees,
            "ageMore" => $ageMore,
            "ageLess" => $ageLess
        ]);
    }
}