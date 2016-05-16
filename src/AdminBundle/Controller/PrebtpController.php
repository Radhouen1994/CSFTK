<?php

namespace AdminBundle\Controller;


use AdminBundle\Entity\Stagiaiarebtp;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Prebtp;
use Symfony\Component\HttpFoundation\Request;

/**
 * Prebtp controller.
 *
 */
class PrebtpController extends Controller
{
    /**
     * Lists all Prebtp entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prebtps = $em->getRepository('AdminBundle:Prebtp')->findAll();
        $grp = $em->getRepository('AdminBundle:Groupe')->findAll();

        return $this->render('prebtp/index.html.twig', array(
            'prebtps' => $prebtps,
            'grp'   => $grp
        ));
    }

    /**
     * Finds and displays a Prebtp entity.
     *
     */
    public function showAction(Prebtp $prebtp)
    {

        return $this->render('prebtp/show.html.twig', array(
            'prebtp' => $prebtp,
        ));
    }

    public function ValidateAction(Request $request,$id)
    {
        $x=$request->get('groupe');
        $em=$this->getDoctrine()->getManager();
        $preBtp=$em->find('AdminBundle:Prebtp',$id);

        $StgBtp=new Stagiaiarebtp();

        $StgBtp->setNom($preBtp->getNom())
            ->setPrenoml($preBtp->getPrenom())
            ->setEmail($preBtp->getEmail())
            ->setCin($preBtp->getCin())
        ;

        $StgBtp->getIdstagiaiarebtp();
        $groupe = $em->getRepository('AdminBundle:Groupe')->find($x);
        $StgBtp->setGroupegroupe($groupe);

        $em->persist($StgBtp);
        $em->remove($preBtp);
        $em->flush();
        return $this->redirect($this->generateUrl('prebtp_index'));
    }
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $preBtp=$em->find('AdminBundle:Prebtp',$id);
        $em->remove($preBtp);
        $em->flush();
        return $this->redirectToRoute('prebtp_index');
    }
}
