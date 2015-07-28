<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
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


        return $this->render('ProposalWebBundle:Default:admin/edit/editProposal1.html.twig',array(
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

    /**
     * @Route("/delete/{entity}/{id}", name="admin_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proposal1 $proposal1)
    {
       /* switch($entity){
            case 'Proposal1':
                $entity_obj = new Proposal1();
            break;
            case 'Proposal2':
                $entity_obj = new Proposal2();
            break;
            case 'Storybook':
                $entity_obj = new Storybook();
            break;
            case 'Confirm':
                $entity_obj = new Confirm();
            break;
            case 'Engagement':
                $entity_obj = new Engagement();
            break;
        }*/

          $form = $this->createDeleteForm($proposal1);
          $form->handleRequest($request);

        if($form->isSubmitted()){
            echo "<script>confirm('确定删除吗?')</script>";
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proposal1);
            $em->flush();
        }

         return $this->redirectToRoute('admin_index');

    }

    private function createDeleteForm($entity_object)
    {

        $obj_str = get_class($entity_object);
        $obj_str = str_replace('Proposal\WebBundle\Entity\\','',$obj_str);
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_delete', array('id' => $entity_object->getId(),'entity'=>$obj_str)))
            ->setMethod('DELETE')
            ->getForm();
    }
}