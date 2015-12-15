<?php

namespace TaxiBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller {
  public function registerAction() {
	  $posts = $this->getDoctrine()
				->getRepository('TaxiBundle:Taxidriver')
				->findAll();
	  return $this->render('TaxiBundle:Blog:list.html.twig', array('posts' => $posts));
	  //return new Response("Welcome to Blog List");
	  //return $this->render('TaxiBundle:Blog:register.html.twig');
  }
}

