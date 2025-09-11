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

	#[Route('/france/flams', name: 'flams')]
	public function flams(): Response
	{
		return $this->render('flams.html.twig');
	}

	#[Route('/reunion/americain', name: 'americain')]
	public function americain(): Response
	{
		return $this->render('americain.html.twig');
	}

	#[Route('/polonais/pierogi', name: 'pierogi')]
	public function pierogi(): Response
	{
		return $this->render('pierogi.html.twig');
	}

	#[Route('/maurice/dahl', name: 'dahl')]
	public function dahl(): Response
	{
		return $this->render('dahl.html.twig');
	}


	#[Route('/footer', name: 'footer')]
	public function footer(): Response
	{
		return $this->render('footer.html.twig');
	}
}