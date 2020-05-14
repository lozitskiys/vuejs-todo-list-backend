<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TodosController extends AbstractController
{
    /**
     * @Route("/api/todos", name="todos_list")
     */
    public function list()
    {
        return $this->json([
            [
                'id' => 1,
                'title' => 'My title',
                'completed' => false
            ],
            [
                'id' => 2,
                'title' => 'My second title',
                'completed' => false
            ],
        ]);
    }
}