<?php

namespace TaxiBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller {
  public function listAction() {
	  return new Response("Welcome to Blog List");
  }
}

