<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\ActualiteStagiaire;
use AdminBundle\Form\ActualiteStagiaireType;

/**
 * ActualiteStagiaire controller.
 *
 */
class ActualiteStagiaireController extends Controller
{
    /**
     * Lists all ActualiteStagiaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actualiteStagiaires = $em->getRepository('AdminBundle:ActualiteStagiaire')->findAll();

        return $this->render('actualitestagiaire/index.html.twig', array(
            'actualiteStagiaires' => $actualiteStagiaires,
        ));
    }

    /**
     * Creates a new ActualiteStagiaire entity.
     *
     */
    public function newAction(Request $request)
    {
        $actualiteStagiaire = new ActualiteStagiaire();
        $form = $this->createForm('AdminBundle\Form\ActualiteStagiaireType', $actualiteStagiaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actualiteStagiaire);
            $em->flush();

            return $this->redirectToRoute('actualitestagiaire_show', array('id' => $actualiteStagiaire->getIdactualiteStagiaire()));
        }

        return $this->render('actualitestagiaire/new.html.twig', array(
            'actualiteStagiaire' => $actualiteStagiaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ActualiteStagiaire entity.
     *
     */
    public function showAction(ActualiteStagiaire $actualiteStagiaire)
    {
        $deleteForm = $this->createDeleteForm($actualiteStagiaire);

        return $this->render('actualitestagiaire/show.html.twig', array(
            'actualiteStagiaire' => $actualiteStagiaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ActualiteStagiaire entity.
     *
     */
    public function editAction(Request $request, ActualiteStagiaire $actualiteStagiaire)
    {
        $deleteForm = $this->createDeleteForm($actualiteStagiaire);
        $editForm = $this->createForm('AdminBundle\Form\ActualiteStagiaireType', $actualiteStagiaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actualiteStagiaire);
            $em->flush();

            return $this->redirectToRoute('actualitestagiaire_edit', array('id' => $actualiteStagiaire->getIdactualiteStagiaire()));
        }

        return $this->render('actualitestagiaire/edit.html.twig', array(
            'actualiteStagiaire' => $actualiteStagiaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ActualiteStagiaire entity.
     *
     */
    public function deleteAction(Request $request, ActualiteStagiaire $actualiteStagiaire)
    {
        $form = $this->createDeleteForm($actualiteStagiaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actualiteStagiaire);
            $em->flush();
        }

        return $this->redirectToRoute('actualitestagiaire_index');
    }

    /**
     * Creates a form to delete a ActualiteStagiaire entity.
     *
     * @param ActualiteStagiaire $actualiteStagiaire The ActualiteStagiaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ActualiteStagiaire $actualiteStagiaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actualitestagiaire_delete', array('id' => $actualiteStagiaire->getIdactualiteStagiaire())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
