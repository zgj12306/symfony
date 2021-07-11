<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{!page}", name="blog_list")
     */
    public function list($page)
    {

        return new Response(
            '<html><body>Lucky number: '.$page.'</body></html>'
        );
    }

    /**
     * @Route("/view/{data}", name="view")
     * @param $data
     * @return Response
     */
    public function view($data)
    {
        return $this->render('/blog/view.html.twig', ['data' => $data]);
    }
}