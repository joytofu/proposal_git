<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\EqualTo;

/**
 * Route("/")
 */

class DefaultController extends Controller
{
    /**
     * @Route("/proposal1")
     */
    public function proposal1()
    {
        $title = array("参加《你最向往的欧洲旅游胜地》有奖调查活动，","你将有机会抽取欧洲十国双人豪华15天游（含机票和食宿）！");
       return $this->render('ProposalWebBundle:Default:proposal.html.twig',array('title0' => $title[0],'title1'=>$title[1]));
    }

    /**
     * @Route("/proposal2")
     */
    public function proposal2()
    {
        $content = "1";
        return $this->render('ProposalWebBundle:Default:proposal2.html.twig',array('content'=>$content));
    }

    /**
     * @Route("/storybook")
     */
    public function storybook(Request $request)
    {
        $form = $this->createFormBuilder() //参数填入对应数据库表对象
        ->add('answer','text',array('constraint'=>new EqualTo(array('value'=>'屎猪','message'=>'回答错误，请重新输入答案!'))))
        ->add('submit','submit',array('label'=>'提交'))
        ->getForm();

        $form->handleRequest($request);
        $data = $form['answer']->getData();

        if($form->isSubmitted() && $form->isValid()){

            //下面是写入数据库操作
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();


            return $this->redirectToRoute('confirm');
        }


        $content = '1';
        return $this->render('ProposalWebBundle:Default:story.html.twig',array('content'=>$content));
    }

    /**
     * @Route('/confirm')
     */
    public function confirm()
    {
        $content = 1;
        return $this->render('ProposalWebBundle:Default:confirm.html.twig',array('content'=>$content));
    }

}
