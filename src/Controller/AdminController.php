<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('admin/login.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Utilisateur $utilisateur)
    {   
        $form = $this->createForm(InscriptionType::class, $utilisateur);
        return $this->render('admin/inscription.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView()
        ]);
    }
}
