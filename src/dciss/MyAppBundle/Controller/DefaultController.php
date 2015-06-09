<?php

namespace dciss\MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	
    	$message = 'Mon premier message';
    	
    	return $this->container->get('templating')->renderResponse('dcissMyAppBundle:Default:index.html.twig',
    			array('message' => $message)
    	);
    
    }
}
