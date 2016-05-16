<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\VerifInscri;
use AdminBundle\Form\VerifInscriType;

/**
 * VerifInscri controller.
 *
 */
class VerifInscriController extends Controller
{
    /**
     * Lists all VerifInscri entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $verifInscris = $em->getRepository('AdminBundle:VerifInscri')->findAll();

        return $this->render('verifinscri/index.html.twig', array(
            'verifInscris' => $verifInscris,
        ));
    }

    /**
     * Creates a new VerifInscri entity.
     *
     */
    public function newAction(Request $request)
    {
        $verifInscri = new VerifInscri();
        $form = $this->createForm('AdminBundle\Form\VerifInscriType', $verifInscri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($verifInscri);
            $em->flush();

            return $this->redirectToRoute('verifinscri_show', array('id' => $verifInscri->getIdverifInscri()));
        }

        return $this->render('verifinscri/new.html.twig', array(
            'verifInscri' => $verifInscri,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a VerifInscri entity.
     *
     */
    public function showAction(VerifInscri $verifInscri)
    {
        $deleteForm = $this->createDeleteForm($verifInscri);

        return $this->render('verifinscri/show.html.twig', array(
            'verifInscri' => $verifInscri,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing VerifInscri entity.
     *
     */
    public function editAction(Request $request, VerifInscri $verifInscri)
    {
        $deleteForm = $this->createDeleteForm($verifInscri);
        $editForm = $this->createForm('AdminBundle\Form\VerifInscriType', $verifInscri);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($verifInscri);
            $em->flush();

            return $this->redirectToRoute('verifinscri_edit', array('id' => $verifInscri->getIdverifInscri()));
        }

        return $this->render('verifinscri/edit.html.twig', array(
            'verifInscri' => $verifInscri,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a VerifInscri entity.
     *
     */
    public function deleteAction(Request $request, VerifInscri $verifInscri)
    {
        $form = $this->createDeleteForm($verifInscri);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($verifInscri);
            $em->flush();
        }

        return $this->redirectToRoute('verifinscri_index');
    }

    /**
     * Creates a form to delete a VerifInscri entity.
     *
     * @param VerifInscri $verifInscri The VerifInscri entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(VerifInscri $verifInscri)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('verifinscri_delete', array('id' => $verifInscri->getIdverifInscri())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
