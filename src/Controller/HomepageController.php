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
	public function homepage(Request $request): Response
	{
	        return $this->render('base.html.twig', [
			'content' => 'unifilter.org',
	        ]);
	}
}

