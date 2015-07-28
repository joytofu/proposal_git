<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bridge\Doctrine;
use Proposal\WebBundle\Entity\Confirm;
use Proposal\WebBundle\Entity\Engagement;
use Proposal\WebBundle\Entity\Proposal;
use Proposal\WebBundle\Entity\Category;
use Proposal\WebBundle\Entity\Proposal2;
use Proposal\WebBundle\Entity\Storybook;
use Proposal\WebBundle\Form\ConfirmType;
use Proposal\WebBundle\Form\EngagementType;
use Proposal\WebBundle\Form\Proposal1Type;
use Proposal\WebBundle\Form\Proposal2Type;
use Proposal\WebBundle\Form\StorybookType;

class EditController extends Controller {

    /**
     * @Route("/edit/proposal1/{id}", requirements={"id" = "\d+"}, name="editProposal1")
     * @Method({"GET","POST"})
     */
    public function editProposal1(Proposal1 $proposal1, Request $request,$id)
    {
        //首先获取需要显示在编辑框的内容
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('ProposalWebBundle:Proposal1')->find($id);

        //输出编辑框表格（显示的内容传到模板中进行渲染）
        $editForm = $this->createForm(new Proposal1Type(),$proposal1);
        $deleteForm = $this->createDeleteForm()


        //update数据库中数据
        $data->setTitle()->setContent();
        $em->flush();

        return $this->render('ProposalWebBundle:Default:admin/edit/editProposal1.html.twig',array('data'=>$data));
    }


    /**
     * @Route("/edit/proposal2/{id}", requirements={"id" = "\d+"}, name="editProposal2")
     * @Method({"GET","POST"})
     */
    public function editProposal2(Proposal2 $proposal2, Request $request)
    {

    }


    /**
     * @Route("/edit/storybook/{id}", requirements={"id" = "\d+"}, name="editStorybook")
     * @Method({"GET","POST"})
     */
    public function editStorybook(Storybook $storybook, Request $request)
    {

    }


    /**
     * @Route("/edit/confirm/{id}", requirements={"id" = "\d+"}, name="editConfirm")
     * @Method({"GET","POST"})
     */
    public function editConfirm(Confirm $confirm, Request $request)
    {

    }


    /**
     * @Route("/edit/engagement/{id}", requirements={"id" = "\d+"}, name="editEngagement")
     * @Method({"GET","POST"})
     */
    public function editEngagement(Engagement $engagement, Request $request)
    {

    }
}