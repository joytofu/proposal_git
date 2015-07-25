<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\EqualTo;


/**
 * @Route("/admin")
 */

class AdminController extends Controller{

    /**
     * @Route("/")
     */
    public function admin_index()
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('')->findAll();


        return $this->render('ProposalWebBundle:Default:admin/admin.html.twig',array('data'=>$data));
    }

    public function admin_post(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('category','choice')
            ->add('title','text')
            ->add('content','text')
            ->add('submit','submit')
            ->getForm();

        $form->handleRequest($request,$repository);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $data = $em->getRepository($repository);
                
        }
    }
}