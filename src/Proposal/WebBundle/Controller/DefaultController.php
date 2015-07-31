<?php

namespace Proposal\WebBundle\Controller;

use Proposal\WebBundle\Entity\Proposal1;
use Proposal\WebBundle\Entity\Proposal2;
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
       $data =  $this->getDoctrine()->getRepository('ProposalWebBundle:Proposal1')->findOneBy(array('id'=>2));
       $title = $data->getTitle();
       $content = $data->getContent();
       return $this->render('ProposalWebBundle:Default:proposal1.html.twig',array('title'=>$title,'content'=>$content));
    }


    /**
     * @Route("/proposal2")
     */
    public function proposal2(Request $request)
    {
        $proposal2 = new Proposal2();
        //获取问题数据
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('ProposalWebBundle:Proposal2')->findAll();
        $order = 1;

        //最后问题表格
        $favCityForm = $this->createFormBuilder($proposal2)
            ->add('fav_city','textarea',array('attr'=>array('rows'=>5)))
            ->getForm();

        $favCityForm->handleRequest($request);
        if($favCityForm->isSubmitted()&&$favCityForm->isValid()){
            $form_data = $favCityForm->getData();
            $form_data->setQuestion('最喜爱的欧洲城市');
            $form_data->setFavCity($form_data->getFavCity());

            $em->persist($form_data);
            $em->flush();
        }


        return $this->render('ProposalWebBundle:Default:proposal2.html.twig',array('data'=>$data,'order'=>$order,'form'=>$favCityForm->createView()));
    }


    /**
     * @Route("/storybook")
     */
    public function storybook(Request $request)
    {



        //答案表格
        $form = $this->createFormBuilder() //表格只作检验答案对错，不对数据库作读写处理，因此参数为空，不绑定数据库
        ->add('answer','text',array('label'=>'','constraints'=>new EqualTo(array('value'=>'屎猪','message'=>'回答错误，请重新输入答案!'))))
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            return $this->redirectToRoute("confirm");
        }


        $content = '1';
        return $this->render('ProposalWebBundle:Default:storyboobook.htmlig',array('content'=>$content,'form'=>$form->createView()));
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
    public function engagement(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('ProposalWebBundle:Engagement')->findAll();
        $pwd_data = $em->getRepository('ProposalWebBundle:Engagement')->find('15');
        $pwd= $pwd_data->getPwd();
        print_r($pwd);
        exit;

        if($_POST){
            $pwd[]=$_POST;
            return $pwd;
        }



        return $this->render('ProposalWebBundle:Default:engagement_test.html.twig',array('data'=>$data));
    }

}
