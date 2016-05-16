<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Encadrant;
use AdminBundle\Form\EncadrantType;

/**
 * Encadrant controller.
 *
 */
class EncadrantController extends Controller
{
    /**
     * Lists all Encadrant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $encadrants = $em->getRepository('AdminBundle:Encadrant')->findAll();

        return $this->render('encadrant/index.html.twig', array(
            'encadrants' => $encadrants,
        ));
    }

    /**
     * Creates a new Encadrant entity.
     *
     */
    public function newAction(Request $request)
    {
        $encadrant = new Encadrant();
        $form = $this->createForm('AdminBundle\Form\EncadrantType', $encadrant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($encadrant);
            $em->flush();

            return $this->redirectToRoute('encadrant_show', array('id' => $encadrant->getIdencadrant()));
        }

        return $this->render('encadrant/new.html.twig', array(
            'encadrant' => $encadrant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Encadrant entity.
     *
     */
    public function showAction(Encadrant $encadrant)
    {
        $deleteForm = $this->createDeleteForm($encadrant);

        return $this->render('encadrant/show.html.twig', array(
            'encadrant' => $encadrant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Encadrant entity.
     *
     */
    public function editAction(Request $request, Encadrant $encadrant)
    {
        $deleteForm = $this->createDeleteForm($encadrant);
        $editForm = $this->createForm('AdminBundle\Form\EncadrantType', $encadrant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($encadrant);
            $em->flush();

            return $this->redirectToRoute('encadrant_edit', array('id' => $encadrant->getIdencadrant()));
        }

        return $this->render('encadrant/edit.html.twig', array(
            'encadrant' => $encadrant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Encadrant entity.
     *
     */
    public function deleteAction(Request $request, Encadrant $encadrant)
    {
        $form = $this->createDeleteForm($encadrant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($encadrant);
            $em->flush();
        }

        return $this->redirectToRoute('encadrant_index');
    }

    /**
     * Creates a form to delete a Encadrant entity.
     *
     * @param Encadrant $encadrant The Encadrant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Encadrant $encadrant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('encadrant_delete', array('id' => $encadrant->getIdencadrant())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
