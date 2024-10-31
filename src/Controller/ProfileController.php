<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profil', name: 'app_profile')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }

	#[Route('/profil/commandes', name: 'app_orders')]
	public function orders(): Response
	{
		$user = $this->getUser();

		if (!$user) {
			return $this->redirectToRoute('app_login');
		}

		return $this->render('profile/orders.html.twig', [
			'user' => $user,
		]);
	}
}
