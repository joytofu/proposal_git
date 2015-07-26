<?php

namespace Proposal\WebBundle\Controller;

use Proposal\WebBundle\Entity\Proposal;
use Proposal\WebBundle\Entity\Category;
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

        $data = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Proposal')->findAll();

        if(!$data){
            throw $this->createNotFoundException('No data at all!!');
        }

        return $this->render('ProposalWebBundle:Default:admin/admin.html.twig',array('data'=>$data));
    }

    /**
     * @Route("/post_new")
     */
    public function admin_post(Request $request)
    {

        $proposal = new Proposal();
        $form = $this->createFormBuilder($proposal)
            ->add('category','entity',
                array(
                    'class'=>'ProposalWebBundle:Category',
                    'choices'=>$proposal->getCategory(),
                    ))
            ->add('title','text')
            ->add('content','textarea')
            //->add('choice','text')
            //->add('image','text')
            //->add('question','text')
            //->add('answer','text')
            ->add('submit','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal);
            $em->flush();
        }

            return $this->render('ProposalWebBundle:Default:admin/admin_post_new.html.twig',array('form'=>$form->createView()));
        }

}