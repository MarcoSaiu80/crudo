<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Indirizzo;
use AppBundle\Entity\Utente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/insert", name="inserimento")
     */
    public function insertAction(Request $request)
    {
        $utente= new Utente();
        $utente->setNome("Marcolino");


        $form= $this->createFormBuilder($utente)
            ->add('nome',TextType::class)
            ->add('comune',TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Salvalo'))
            ->getForm();
        // replace this example code with whatever you need

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

        }

        return $this->render('crudo/insert.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'form' =>$form->createView()
        ]);
    }
}
