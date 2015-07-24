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
        ->add('answer','text',array('label'=>'','constraints'=>new EqualTo(array('value'=>'屎猪','message'=>'回答错误，请重新输入答案!'))))
        ->add('submit','submit',array('label'=>'提交'))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            return $this->redirectToRoute("confirm");
        }


        $content = '1';
        return $this->render('ProposalWebBundle:Default:story.html.twig',array('content'=>$content,'form'=>$form->createView()));
    }


    /**
     * @Route("/confirm", name="confirm")
     */
    public function confirm(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('checkbox','checkbox',array('label'=>'讨厌，就是屎猪我了啦>_<','constraints'=>new EqualTo(array('value'=>1,'message'=>'请确认以上信息'))))
            ->add('submit','submit',array('label'=>'确定'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('heart');
        }


        $content = 1;
        return $this->render('ProposalWebBundle:Default:confirm.html.twig',array('content'=>$content,'form'=>$form->createView()));
    }


    /**
     * @Route("/heart", name="heart")
     */
    public function heart()
    {
        $content = 1;
        return $this->render('ProposalWebBundle:Default:heart.html.twig',array('content'=>$content));
    }


    /**
     * @Route("/engagement", name="engagement")
     */
    public function engagement()
    {
        $content = 1;
        return $this->render('ProposalWebBundle:Default:engagement.html.twig',array('content'=>$content));
    }

}
