<?php

namespace AdminBundle\Controller;


use AdminBundle\Entity\Stagiaiarebts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Prebts;
use Symfony\Component\HttpFoundation\Request;

/**
 * Prebts controller.
 *
 */
class PrebtsController extends Controller
{
    /**
     * Lists all Prebts entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prebts = $em->getRepository('AdminBundle:Prebts')->findAll();
        $grp = $em->getRepository('AdminBundle:Groupe')->findAll();

        return $this->render('prebts/index.html.twig', array(
            'prebts' => $prebts,
            'grp'   => $grp
        ));
    }

    /**
     * Finds and displays a Prebts entity.
     *
     */
    public function showAction(Prebts $prebts)
    {

        return $this->render('prebts/show.html.twig', array(
            'prebts' => $prebts,
        ));
    }

    public function ValidateAction(request $request,$id)
    {
        $x=$request->get('groupe');

        $em=$this->getDoctrine()->getManager();
        $preBts=$em->find('AdminBundle:Prebts',$id);


        $StgBts=new Stagiaiarebts();
        $StgBts->setNom($preBts->getNom())
            ->setPrenoml($preBts->getPrenom())
            ->setEmail($preBts->getEmail())
            ->setCin($preBts->getCin())
            ->setSpecialite($preBts->getSpecialite())

            ;

        $StgBts->getIdstagiaiarebts();
        $groupe = $em->getRepository('AdminBundle:Groupe')->find($x);
        $StgBts->setGroupegroupe($groupe);

        $em->persist($StgBts);
        $em->remove($preBts);
        $em->flush();





        return $this->redirect($this->generateUrl('prebts_index'));
    }
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $preBts=$em->find('AdminBundle:Prebts',$id);
            $em->remove($preBts);
            $em->flush();
        return $this->redirectToRoute('prebts_index');
    }
}
