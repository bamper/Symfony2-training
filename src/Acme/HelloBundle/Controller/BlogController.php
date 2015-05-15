<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    public function indexAction($page)
    {

        $content = "Page: $page";

        return new Response($content);

    }

    public function showAction($slug)
    {
        $content = $this->renderView(
            'AcmeHelloBundle:Hello:index.html.twig',
            array('name' => $slug)
        );

        return new Response($content);
    }
}