<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Doctrine;
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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;

/**
 * @Route("/admin")
 */
class EditController extends Controller {

    /**
     * @Route("/edit/proposal1/{id}", requirements={"id" = "\d+"}, name="editProposal1")
     * @Method({"GET","POST"})
     */
    public function editProposal1(Proposal1 $proposal1, Request $request)
    {

        //首先获取需要显示在编辑框的内容
        $em = $this->getDoctrine()->getManager();

        //创建编辑框表格（显示的内容传到模板中进行渲染）
        $editForm = $this->createForm(new Proposal1Type(),$proposal1);
        $deleteForm = $this->createDeleteForm($proposal1);

        $editForm->handleRequest($request);

        if($editForm->isSubmitted()&&$editForm->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('admin_editProposal1',array('id'=>$proposal1->getId()));
        }


        return $this->render('ProposalWebBundle:Default:admin/proposal1.html.twig',array(
            'proposal1'=>$proposal1,
            'form'=>$editForm->createView(),
            'deleteForm'=>$deleteForm->createView(),
            'button_name'=>'proposal1'));
    }


    /**
     * @Route("/edit/proposal2/{id}", requirements={"id" = "\d+"}, name="editProposal2")
     * @Method({"GET","POST"})
     */
    public function editProposal2(Proposal2 $proposal2, Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $editForm = $this->createForm(new Proposal2Type(),$proposal2);
        $deleteForm = $this->createDeleteForm($proposal2);

        $editForm->handleRequest($request);

        if($editForm->isSubmitted()&&$editForm->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('admin_editProposal2',array('id'=>$proposal2->getId()));
        }


        return $this->render('ProposalWebBundle:Default:admin/proposal2.html.twig',array(
            'proposal2'=>$proposal2,
            'form'=>$editForm->createView(),
            'deleteForm'=>$deleteForm->createView(),
            'button_name'=>'proposal2'));
    }


    /**
     * @Route("/edit/storybook/{id}", requirements={"id" = "\d+"}, name="editStorybook")
     * @Method({"GET","POST"})
     */
    public function editStorybook(Storybook $storybook, Request $request)
    {
        $file_obj = new UploadedFile($storybook->getFile(),$storybook->getWebPath());

        $em = $this->getDoctrine()->getManager();

        //$editForm = $this->createForm(new StorybookType(),$storybook);
        $editForm = $this->createFormBuilder($storybook)
            ->add('title','text')
            ->add('content','textarea',array('attr'=>array('rows'=>20)))
            ->add('file','file',array(
                'label'=>'插图'
                ))
            ->getForm();

        $deleteForm = $this->createDeleteForm($storybook);

        $editForm->handleRequest($request);

        if($editForm->isSubmitted()&&$editForm->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('admin_editStorybook',array('id'=>$storybook->getId()));
        }


        return $this->render('ProposalWebBundle:Default:admin/storybook.html.twig',array(
            'storybook'=>$storybook,
            'form'=>$editForm->createView(),
            'deleteForm'=>$deleteForm->createView(),
            'button_name'=>'storybook'));
    }


    /**
     * @Route("/edit/confirm/{id}", requirements={"id" = "\d+"}, name="editConfirm")
     * @Method({"GET","POST"})
     */
    public function editConfirm(Confirm $confirm, Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $editForm = $this->createForm(new ConfirmType(),$confirm);
        $deleteForm = $this->createDeleteForm($confirm);

        $editForm->handleRequest($request);

        if($editForm->isSubmitted()&&$editForm->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('admin_editConfirm',array('id'=>$confirm->getId()));
        }


        return $this->render('ProposalWebBundle:Default:admin/confirm.html.twig',array(
            'confirm'=>$confirm,
            'form'=>$editForm->createView(),
            'deleteForm'=>$deleteForm->createView(),
            'button_name'=>'confirm'));
    }


    /**
     * @Route("/edit/engagement/{id}", requirements={"id" = "\d+"}, name="editEngagement")
     * @Method({"GET","POST"})
     */
    public function editEngagement(Engagement $engagement, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $editForm = $this->createForm(new EngagementType(),$engagement);
        $deleteForm = $this->createDeleteForm($engagement);

        $editForm->handleRequest($request);

        if($editForm->isSubmitted()&&$editForm->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('admin_editEngagement',array('id'=>$engagement->getId()));
        }


        return $this->render('ProposalWebBundle:Default:admin/engagement.html.twig',array(
            'engagement'=>$engagement,
            'form'=>$editForm->createView(),
            'deleteForm'=>$deleteForm->createView(),
            'button_name'=>'engagement'));
    }

    /**
     * @Route("/delete/proposal1/{id}", name="delete_proposal1")
     * @Method("DELETE")
     *
     * 删除proposal1中对应id对象
     */
    public function deleteProposal1(Request $request, Proposal1 $proposal1)
    {
          $form = $this->createDeleteForm($proposal1);
          $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proposal1);
            $em->flush();
        }

         return $this->redirectToRoute('admin_index');
    }


    /**
     * @Route("/delete/proposal2/{id}", name="delete_proposal2")
     * @Method("DELETE")
     *
     * 删除proposal2中对应id对象
     */
    public function deleteProposal2(Request $request, Proposal2 $proposal2)
    {
        $form = $this->createDeleteForm($proposal2);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proposal2);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }

    /**
     * @Route("/delete/storybook/{id}", name="delete_storybook")
     * @Method("DELETE")
     *
     * 删除storybook中对应id对象
     */
    public function deleteStorybook(Request $request, Proposal1 $proposal1)
    {
        $form = $this->createDeleteForm($proposal1);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proposal1);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }


    /**
     * @Route("/delete/confirm/{id}", name="delete_confirm")
     * @Method("DELETE")
     *
     * 删除confirm中对应id对象
     */
    public function deleteConfirm(Request $request, Confirm $confirm)
    {
        $form = $this->createDeleteForm($confirm);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($confirm);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }


    /**
     * @Route("/delete/engagement/{id}", name="delete_engagement")
     * @Method("DELETE")
     *
     * 删除engagement中对应id对象
     */
    public function deleteEngagement(Request $request, Engagement $engagement)
    {
        $form = $this->createDeleteForm($engagement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($engagement);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }


    /**
     * 将删除按钮作为一个表格创建，由edit controller中传入的entity对象作为参数，通过对象获取对应的id，再将id return给
     * delete controller
     */
    private function createDeleteForm($entity_object)
    {

        $obj_str = get_class($entity_object);
        $obj_str = str_replace('Proposal\WebBundle\Entity\\','',$obj_str);

        switch($obj_str){
            case 'Proposal1':
                $gUrl = "delete_proposal1";
                break;
            case 'Proposal2':
                $gUrl = "delete_proposal2";
                break;
            case 'Storybook':
                $gUrl = "delete_storybook";
                break;
            case 'Confirm':
                $gUrl = "delete_confirm";
                break;
            case 'Engagement':
                $gUrl = "delete_engagement";
                break;
        }

        return $this->createFormBuilder()
            ->setAction($this->generateUrl($gUrl, array('id' => $entity_object->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}