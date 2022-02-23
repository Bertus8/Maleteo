<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route("/")]
    public function Home()
    {
        return $this->render("home.html.twig", [
            
        ]);
    }
    #[Route("/Registro")]
    public function Registro()
    {
        return $this->render("registro.html.twig", [
            
        ]);
    }
    #[Route("/Login")]
    public function Login()
    {
    return $this->render("login.html.twig", [
            
    ]);
}
    #[Route("/Perfil")]
    public function Perfil()
    {
        return $this->render("perfil.html.twig", [
                
        ]);
    }
    #[Route("/Mapa")]
    public function Mapa()
    {
        return $this->render("mapa.html.twig", [
                
        ]);
    }
}