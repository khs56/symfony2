<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * @Route("/view", name="app_view")
     */
    public function index(): Response
    {

        // day of the week
        $tag = date('l');

        // object example
        $user = [
            'name' => 'Sarah',
            'nachname' => 'dev',
            'alter' => '99',
        ];

        $a = array('apple', 'pear', 'orange');


        return $this->render('view/index.html.twig', [
           // 'controller_name' => 'ViewController',
            'd' => $tag,
            'user' => $user,
            'a' => $a
        ]);
    }
}
