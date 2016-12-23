<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('ArticlesBundle:Articles')->findAll();

        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'articles' => $articles,
            'users' => $users
        ]);

    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('ArticlesBundle:Articles')->findAll();
        $userManager = $this->get('fos_user.user_manager');
        $user = $this->getUser();

        // replace this example code with whatever you need
        return $this->render('default/profile.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'user' => $user
        ]);

    }

}
