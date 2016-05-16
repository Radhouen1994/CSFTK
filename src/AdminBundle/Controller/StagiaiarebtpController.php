<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Stagiaiarebtp;
use AdminBundle\Form\StagiaiarebtpType;

/**
 * Stagiaiarebtp controller.
 *
 */
class StagiaiarebtpController extends Controller
{
    /**
     * Lists all Stagiaiarebtp entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stagiaiarebtps = $em->getRepository('AdminBundle:Stagiaiarebtp')->findAll();

        return $this->render('stagiaiarebtp/index.html.twig', array(
            'stagiaiarebtps' => $stagiaiarebtps,
        ));
    }

    /**
     * Creates a new Stagiaiarebtp entity.
     *
     */
    public function newAction(Request $request)
    {
        $stagiaiarebtp = new Stagiaiarebtp();
        $form = $this->createForm('AdminBundle\Form\StagiaiarebtpType', $stagiaiarebtp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stagiaiarebtp);
            $em->flush();

            return $this->redirectToRoute('stagiaiarebtp_show', array('id' => $stagiaiarebtp->getIdstagiaiarebtp()));
        }

        return $this->render('stagiaiarebtp/new.html.twig', array(
            'stagiaiarebtp' => $stagiaiarebtp,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stagiaiarebtp entity.
     *
     */
    public function showAction(Stagiaiarebtp $stagiaiarebtp)
    {
        $deleteForm = $this->createDeleteForm($stagiaiarebtp);

        return $this->render('stagiaiarebtp/show.html.twig', array(
            'stagiaiarebtp' => $stagiaiarebtp,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Stagiaiarebtp entity.
     *
     */
    public function editAction(Request $request, Stagiaiarebtp $stagiaiarebtp)
    {
        $deleteForm = $this->createDeleteForm($stagiaiarebtp);
        $editForm = $this->createForm('AdminBundle\Form\StagiaiarebtpType', $stagiaiarebtp);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stagiaiarebtp);
            $em->flush();

            return $this->redirectToRoute('stagiaiarebtp_edit', array('id' => $stagiaiarebtp->getIdstagiaiarebtp()));
        }

        return $this->render('stagiaiarebtp/edit.html.twig', array(
            'stagiaiarebtp' => $stagiaiarebtp,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Stagiaiarebtp entity.
     *
     */
    public function deleteAction(Request $request, Stagiaiarebtp $stagiaiarebtp)
    {
        $form = $this->createDeleteForm($stagiaiarebtp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stagiaiarebtp);
            $em->flush();
        }

        return $this->redirectToRoute('stagiaiarebtp_index');
    }

    /**
     * Creates a form to delete a Stagiaiarebtp entity.
     *
     * @param Stagiaiarebtp $stagiaiarebtp The Stagiaiarebtp entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stagiaiarebtp $stagiaiarebtp)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stagiaiarebtp_delete', array('id' => $stagiaiarebtp->getIdstagiaiarebtp())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
