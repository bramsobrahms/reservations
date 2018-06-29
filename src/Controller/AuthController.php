<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
    
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
    
    /**
     * @Route("/billing", name="billing")
     */
   /* public function billing(request $request)
    {
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }*/
}
