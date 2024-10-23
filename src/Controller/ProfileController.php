<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController{

#[Route('/', name: 'home', methods: ['GET'])]
    function index(Request $request): Response {

    return $this->render('profile/index.html.twig', []);

    }

}