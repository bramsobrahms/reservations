<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Locality;

class LocalityController extends Controller
{
    /**
     * @Route("/locality", name="locality")
     */
    public function index()
    {
		//Récupérer le gestionnaire de table (repository)
		$repository = $this->getDoctrine()->getRepository(Locality::class);
		
		$localities = $repository->findAll();
		
        return $this->render('locality/index.html.twig', [
            'localities' => $localities,
        ]);
    }
}
