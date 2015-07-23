<?php

namespace Proposal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Route("/")
 */

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $title = array("参加《你最向往的欧洲旅游胜地》有奖调查活动，","你将有机会抽取欧洲十国双人豪华15天游（含机票和食宿）！");
       return $this->render('ProposalWebBundle:Default:proposal.html.twig',array('title0' => $title[0],'title1'=>$title[1]));
    }
}
