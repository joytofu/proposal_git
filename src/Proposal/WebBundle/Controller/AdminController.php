<?php

namespace Proposal\WebBundle\Controller;

use Proposal\WebBundle\Entity\Confirm;
use Proposal\WebBundle\Entity\Engagement;
use Proposal\WebBundle\Entity\Proposal;
use Proposal\WebBundle\Entity\Category;
use Proposal\WebBundle\Entity\Proposal2;
use Proposal\WebBundle\Entity\Storybook;
use Proposal\WebBundle\Form\Proposal1Type;
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
     * @Route("/",name="admin_index")
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
     * @Route("/new_proposal",name="new_proposal")
     */
    public function new_proposal(Request $request)
    {

        $proposal = new Proposal();
        $form = $this->createForm(new Proposal1Type(),$proposal);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            echo "<script>alert('创建成功!')</script>";
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal);
            $em->flush();
            return $this->redirectToRoute('admin_index');
        }
            return $this->render('ProposalWebBundle:Default:admin/new_proposal.html.twig',array('button_name'=>'proposal','form'=>$form->createView()));
        }

    /**
     * @Route("/new_proposal2")
     */
    public function new_proposal2(Request $request)
    {
        $proposal2 = new Proposal2();
        $form = $this->createFormBuilder($proposal2)
            ->add('question','text')
            ->add('option1','text')
            ->add('option2','text')
            ->add('option3','text')
            ->add('option4','text')
            ->add('option5','text')
            ->add('提交','submit')
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal2);
            $em->flush();
            echo "<script>alert('创建成功！')</script>";
            return $this->redirectToRoute("/admin/");
        }
        return $this->render('ProposalWebBundle:Default:admin/new_proposal2.html.twig',array('button_name'=>'proposal2','form'=>$form->createView()));
    }

    /**
     * @Route("/new_storybook")
     */
    public function new_storybook(Request $request){
        $storybook = new Storybook();
        $form = $this->createFormBuilder($storybook)
            ->add('title','text')
            ->add('content','textarea')
            ->add('images','file',array('label'=>'插图'))
            ->add('submit','submit')
            ->getForm();

        $form->handleRequest($request);
        $file = $form['images']->getData();

        if($form->isSubmitted()&&$form->isValid()){
            $dir = dirname(__DIR__)."\\"."images";  //文件储存路径
            $fileSavedName = $file->getClientOriginalName();  //上传后的文件名
            $file->move($dir,$fileSavedName);  //对上传的文件进行处理，从临时文件夹移动到定义的文件夹中以及命名文件
            $storybook->setImages($dir."\\".$fileSavedName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($storybook);
            $em->flush();

            echo "<script>alert('创建成功！')</script>";
            return $this->redirectToRoute("/admin/");
        }
        return $this->render('ProposalWebBundle:Default:admin/new_storybook.html.twig',array('button_name'=>'storybook','form'=>$form->createView()));
    }

    /**
     * @Route("/new_confirm")
     */
    public function confirm(Request $request){
        $confirm = new Confirm();
        $form = $this->createFormBuilder($confirm)
            ->add('images','text')
            ->add('submit','submit')
            ->getForm();

        $form->handleRequest($request);
        $file = $form['images']->getData();

        if($form->isSubmitted()&&$form->isValid()) {
            $dir = dirname(__DIR__) . "\\" . "images";  //文件储存路径
            $fileSavedName = $file->getClientOriginalName();  //上传后的文件名
            $file->move($dir, $fileSavedName);  //对上传的文件进行处理，从临时文件夹移动到定义的文件夹中以及命名文件
            $confirm->setImages($dir . "\\" . $fileSavedName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($confirm);
            $em->flush();

            echo "<script>alert('创建成功！')</script>";
            return $this->redirectToRoute("/admin/");
        }
        return $this->render('ProposalWebBundle:Default:admin/new_confirm.html.twig',array('button_name'=>'confirm','form'=>$form->createView()));
    }

    /**
     * @Route("/new_engagement")
     */
    public function new_engagement(Request $request){
        $engagement = new Engagement();
        $form = $this->createFormBuilder($engagement)
            ->add('title','text')
            ->add('content','textarea')
            ->add('questions','textarea')
            ->add('answers','textarea')
            ->add('submit','submit')
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($engagement);
            $em->flush();

            echo "<script>alert('创建成功！')</script>";
            return $this->redirectToRoute("/admin/");
        }
        return $this->render('ProposalWebBundle:Default:admin/new_engagement.html.twig',array('button_name'=>'engagement','form'=>$form->createView()));

    }

}