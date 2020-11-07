<?php


namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

/**
 * @Route ("/" , name ="home")
 * 
 */

 public function index() 

 {
     
    return $this->render('pages/home.html.twig');
 }


}




?>