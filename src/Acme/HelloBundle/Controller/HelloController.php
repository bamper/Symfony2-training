<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController
{
    public function indexAction($first_name, $last_name, $color)
    {
        return new Response('<html><body>Hello '.$first_name.' '.$last_name.' in color '.$color.'!</body></html>');
    }
}
/*
class HelloController extends Controller
{
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
        return $this->render(
            'AcmeHelloBundle:Hello:index.html.twig',
            array('name' => $name)
        );
    }
}
*/