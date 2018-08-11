<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogAbongerController extends AbstractController
{
    /**
     * @Route("/blog/abonger", name="blog_abonger")
     */
    public function index()
    {
        return $this->render('blog_abonger/index.html.twig', [
            'controller_name' => 'BlogAbongerController',
        ]);
    }

    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        // ...
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }

}
