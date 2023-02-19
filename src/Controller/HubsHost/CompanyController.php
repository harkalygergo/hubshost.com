<?php

namespace App\Controller\HubsHost;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    #[Route('/company', name: 'app_company')]
    public function index(CompanyRepository $companyRepository): Response
    {
        return $this->render('hubshost.com/datahub/company/index.html.twig', [
            'controller_name' => 'CompanyController',
            'entities' => $companyRepository->findAll(),
        ]);
    }
}
