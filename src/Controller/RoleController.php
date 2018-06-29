<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Role;

class RoleController extends Controller
{
    /**
     * @Route("/role", name="role")
     */
    public function index()
    {
		$repository = $this->getDoctrine()->getRepository(Role::class);
		
		$roles = $repository->findAll();
		
        return $this->render('role/index.html.twig', [
            'roles' => $roles,
        ]);
    }
}
