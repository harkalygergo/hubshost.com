<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Route('/')
 */
class HomepageController extends AbstractController
{
    /**
     * Route('/', methods: ['GET'], name: 'homepage')
     */
    public function index(Request $request): Response
    {
        return $this->render('base.html.twig', [
            'content' => '<h2>A <code>DATAHUB</code> egy ingyenes online univerzális adatbázis, mely több témakörben is biztosít összetett keresési lehetőséget.</h1><h2>Mottónk: <blockquote>Keress tudatosan, szűrj részletesen!</blockquote></h2>
                <h3>Kategóriák:</h3>
                <ul>
                    <li><a href="/hu/watch">Wathces</a></li>
                </ul>

            ',
        ]);
    }
}

