<?php

namespace TaxiBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller {
  public function registerAction() {
	  return $this->render('TaxBundle:Blog:register.html.twig');
  }
}

