<?php

namespace App\Controller;

use App\Entity\Debilidad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Pokemon;
use App\Form\PokemonFormType;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends AbstractController
{
    #[Route("/maleteo")]
    public function Home()
    {
        return $this->render("maleteo/home.html.twig", [
            
        ]);
    }
    #[Route("/registro")]
    public function Registro()
    {
        return $this->render("maleteo/registro.html.twig", [
            
        ]);
    }
    #[Route("solicitudes", name: "solicitudes")]
    public function Solicitudes()
    {
        return $this->render("maleteo/solicitudes.html.twig", [
            
        ]);
    }
    #[Route("/perfil")]
    public function Perfil()
    {
        return $this->render("maleteo/perfil.html.twig", [
                
        ]);
    }
    #[Route("/mapa")]
    public function Mapa()
    {
        return $this->render("maleteo/mapa.html.twig", [
                
        ]);
    }
}