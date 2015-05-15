<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HelloController extends Controller
{
    public function indexAction($name)
    {
        $content = $this->renderView(
            'AcmeHelloBundle:Hello:index.html.twig',
            array('name' => $name)
        );



        return new Response($content);

    }
}
