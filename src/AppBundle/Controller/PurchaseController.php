<?php
/**
 * Created by PhpStorm.
 * User: Acer i7 NITRO
 * Date: 5/18/2016
 * Time: 11:52 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Purchase;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/purchase")
 */
class PurchaseController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $purchase = $this->getDoctrine()->getRepository('AppBundle:Purchase')->findAll();

        return $this->render('AppBundle:Purchase:index.html.haml', ['purchase'=>$purchase]);
    }

    /**
     * @Route("/new")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        return $this->render('');
    }

    /**
     * @Route("/{purchase}/edit")
     * @param Purchase $purchase
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Purchase $purchase, Request $request)
    {
        return $this->render('');
    }

    /**
     * @Route("/{purchase}/remove")
     * @param Purchase $purchase
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function removeAction(Purchase $purchase, Request $request)
    {
        return $this->render('');
    }
}
