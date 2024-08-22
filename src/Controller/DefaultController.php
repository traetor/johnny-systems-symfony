<?php
// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface; // Przykładowa usługa

class DefaultController extends AbstractController
{
    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        // Możesz używać $this->translator tutaj
        $message = $this->translator->trans('welcome_message');
        return new Response($message);
    }
}