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

	#[Route('/france', name: 'france')]
	public function france(): Response
	{
		return $this->render('france.html.twig');
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

	#[Route('/reunion', name: 'reunion')]
	public function reunion(): Response
	{
		return $this->render('reunion.html.twig');
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
    #[Route('/reunion/americain/tableauDesSandwich',name : 'tableau')]
    public function tableau():Response{
        return $this->render('tableauDesSandwich.html.twig');
    }

	#[Route('/footer', name: 'footer')]
	public function footer(): Response{
		return $this->render('footer.html.twig');
	}

	#[Route('/cgu', name: 'cgu')]
	public function cgu(): Response{
		return $this->render('cgu.html.twig');
	}

	#[Route('/rgpd', name: 'rgpd')]
	public function rgpd(): Response{
		return $this->render('rgpd.html.twig');
	}

	#[Route('/mentionslegales', name: 'mentionslegales')]
	public function mentionslegales(): Response{
		return $this->render('mentionslegales.html.twig');
	}

	#[Route('/accesibilite', name: 'accesibilite')]
	public function accesibilite(): Response{
		return $this->render('accesibilite.html.twig');
	}
}