<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TestExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('firstWord', [$this, 'firstWord']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('makebtn', [$this, 'makebtn']),
        ];
    }

    public function firstWord($text)
    {
        $words = explode(' ',$text)[0];

        $words = str_replace('.','',$words);
        $words = str_replace(',','',$words);
        $words = str_replace('?','',$words);
        $words = str_replace(':','',$words);
        $words = str_replace('!','',$words);

        return($words);
    }

    public function makebtn($innerhtml, $bouton = "")
    {
        switch($bouton)
        {
            case "primary":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "secondary":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "success":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "danger":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "warning":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "info":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "light":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            case "dark":
                print("<button type=\"button\" class=\"btn btn-".$bouton."\">".$innerhtml."</button>");
            break;

            default:
                print("<button type=\"button\" class=\"btn btn-link\">".$innerhtml."</button>");
            break;
        }

    }
}
