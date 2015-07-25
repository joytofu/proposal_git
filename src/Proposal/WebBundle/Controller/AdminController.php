<?php

namespace Proposal\WebBundle\Controller;

use Proposal\WebBundle\Entity\Proposal1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Bridge\Doctrine;


/**
 * @Route("/admin")
 */

class AdminController extends Controller{

    /**
     * @Route("/")
     */
    public function admin_index()
    {
        $proposal1 = new Proposal1();
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('ProposalWebBundle:Proposal1')->findAll();

//        $content = array('proposal1','proposal2','storybook','confirm','heart','engagement');
        return $this->render('ProposalWebBundle:Default:admin/admin.html.twig',array('data'=>$data));
    }

    /**
     * @Route("/post_new")
     */
    public function admin_post(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('category','choice')
            ->add('title','text')
            ->add('content','text')
            ->add('submit','submit')
            ->getForm();

        $form->handleRequest($request);
        $type = $form['category']->getData();
        $type_object = new $type;
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($type_object);
            $em->flush();

            return $this->render('ProposalWebBundle:Default:admin/admin_post_new.html.twig',array('form'=>$form->createView()));
        }
    }

}