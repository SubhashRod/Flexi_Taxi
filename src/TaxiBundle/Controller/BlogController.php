<?php

namespace TaxiBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller {
  public function registerAction() {
	  //return new Response("Welcome to Blog List");
	  return $this->render('TaxiBundle:Blog:register.html.twig');
  }
}

