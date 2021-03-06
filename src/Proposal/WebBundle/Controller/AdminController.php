<?php

namespace Proposal\WebBundle\Controller;

use Proposal\WebBundle\Entity\Confirm;
use Proposal\WebBundle\Entity\Engagement;
use Proposal\WebBundle\Entity\Proposal1;
use Proposal\WebBundle\Entity\Proposal2;
use Proposal\WebBundle\Entity\Storybook;
use Proposal\WebBundle\Form\ConfirmType;
use Proposal\WebBundle\Form\EngagementType;
use Proposal\WebBundle\Form\Proposal1Type;
use Proposal\WebBundle\Form\Proposal2Type;
use Proposal\WebBundle\Form\StorybookType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Bridge\Doctrine;
use Symfony\Component\Filesystem\Filesystem;


/**
 * @Route("/admin")
 */

class AdminController extends Controller{

    /**
     * @Route("/",name="admin_index")
     */
    public function admin_index()
    {

        $data1 = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Proposal1')->findAll();
        $data2 = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Proposal2')->findAll();
        $data3 = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Storybook')->findAll();
        $data4 = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Confirm')->findAll();
        $data5 = $this->getDoctrine()->getManager()->getRepository('ProposalWebBundle:Engagement')->findAll();


        /*if(!$data1||!$data2||!$data3||!$data4||!$data5){
            throw $this->createNotFoundException('No data at all!!');
        }*/

        return $this->render('ProposalWebBundle:Default:admin/admin.html.twig',array('data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5));
    }

    /**
     * @Route("/new_proposal1",name="new_proposal1")
     */
    public function new_proposal1(Request $request)
    {

        $proposal1 = new Proposal1();
        $form = $this->createForm(new Proposal1Type(),$proposal1);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            echo "<script>alert('创建成功!')</script>";
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal1);
            $em->flush();
            return $this->redirectToRoute('new_proposal1');
        }
            return $this->render('ProposalWebBundle:Default:admin/proposal1.html.twig',array('button_name'=>'proposal1','form'=>$form->createView()));
        }

    /**
     * @Route("/new_proposal2",name="new_proposal2")
     */
    public function new_proposal2(Request $request)
    {
        $proposal2 = new Proposal2();
        $form = $this->createForm(new Proposal2Type(),$proposal2);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            echo "<script>alert('创建成功!')</script>";
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal2);
            $em->flush();
            return $this->redirectToRoute("new_proposal2");
        }
        return $this->render('ProposalWebBundle:Default:admin/proposal2.html.twig',array('button_name'=>'proposal2','form'=>$form->createView()));
    }

    /**
     * @Route("/new_storybook",name="new_storybook")
     */
    public function new_storybook(Request $request){
        $storybook = new Storybook();
        $form = $this->createForm(new StorybookType(),$storybook);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){

            $em = $this->getDoctrine()->getManager();

            $em->persist($storybook);
            $em->flush();

            return $this->redirectToRoute("new_storybook");
        }
        return $this->render('ProposalWebBundle:Default:admin/storybook.html.twig',array('button_name'=>'storybook','form'=>$form->createView()));
    }

    /**
     * @Route("/new_confirm",name="new_confirm")
     */
    public function new_confirm(Request $request){
        $confirm = new Confirm();
        $form = $this->createForm(new ConfirmType(),$confirm);

        $form->handleRequest($request);


        if($form->isSubmitted()&&$form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($confirm);
            $em->flush();

            return $this->redirectToRoute("new_confirm");
        }
        return $this->render('ProposalWebBundle:Default:admin/confirm.html.twig',array('button_name'=>'confirm','form'=>$form->createView()));
    }

    /**
     * @Route("/new_engagement",name="new_engagement")
     */
    public function new_engagement(Request $request){
        $engagement = new Engagement();
        $form = $this->createForm(new EngagementType(),$engagement);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            echo "<script>alert('创建成功！')</script>";
            $em = $this->getDoctrine()->getManager();
            $em->persist($engagement);
            $em->flush();

            return $this->redirectToRoute("new_engagement");
        }
        return $this->render('ProposalWebBundle:Default:admin/engagement.html.twig',array('button_name'=>'engagement','form'=>$form->createView()));
    }

    /**
     * @Route("/test_entity")
     */
    public function test_entity()
    {

        $content = 1;
        return $this->render('ProposalWebBundle:Default:test.html.twig',array('c'=>$content));
    }

}