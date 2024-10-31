<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    #[Route("/produits", name: "app_products_index")]
    public function index(): Response
    {
        return $this->render("products/index.html.twig", [
            "controller_name" => "ProductsController",
        ]);
	}
	
	#[Route("/produits/{slug}", name: "app_products_details")]
    public function details(string $slug): Response
    {
        return $this->render("products/details.html.twig");
		
    }
}
