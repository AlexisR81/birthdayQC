<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post/", name="app_post")
     */
    public function index(): Response
    {
        include (__DIR__.'/../../data/posts.php');

        $posts = json_decode($posts);
        dump($posts);

        return $this->render('post/index.html.twig', [
            'posts' => $posts
        ]);
    }

     /**
     * @Route("/post/{id}", name="app_post_show")
     */
    public function show($id)
    {
        include (__DIR__.'/../../data/posts.php');

        $posts = json_decode($posts);
        dump($id);
        return $this->render('post/show.html.twig', [
            'posts' => $posts , "id" => $id
         ]);
    }

    /**
     * @Route("/category/{id}", name="app_post_category")
     */
    public function category($id)
    {
        include (__DIR__.'/../../data/posts.php');

        $posts = json_decode($posts);
        dump($id);
        return $this->render('post/category.html.twig', [
            'posts' => $posts , "idtag" => $id
         ]);
    }
}
