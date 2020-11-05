<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="api_post_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->findAll();
        dd($article);

        return $this->render('api_post/index.html.twig', [
            'controller_name' => 'ApiPostController',
        ]);
    }
}
