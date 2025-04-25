<?php

namespace App\Controller;

use App\Repository\AnnouncementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    function home(AnnouncementRepository $announcementRepository) {
        $annoucements = $announcementRepository->findBy([], ['created_at' => 'DESC']);

        return $this->render('home.html.twig');
    }

}