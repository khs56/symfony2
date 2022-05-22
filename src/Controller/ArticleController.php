<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(Request $request)
    {
        $article = new Article();
        $article->setTitle('New York State is growing businesses, investment and jobs');

        $em = $this->getDoctrine()->getManager(); //entity manager

        $em->persist($article); //store the data in db
        $em->flush();

        return new Response("Article was created");
        // return $this->render('article/index.html.twig', [
        //     'controller_name' => 'ArticleController',
        // ]);
    }
}
