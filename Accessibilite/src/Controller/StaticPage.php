<?php
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class StaticPage extends AbstractController
{
	#[Route('/', name: 'home')]
	public function index(): Response
	{
		return $this->render('Accueil.html.twig');
	}

	#[Route('/flams', name: 'flams')]
	public function flams(): Response
	{
		return $this->render('flams.html.twig');
	}
}