<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Actualite;
use AdminBundle\Form\ActualiteType;

/**
 * Actualite controller.
 *
 */
class ActualiteController extends Controller
{
    /**
     * Lists all Actualite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actualites = $em->getRepository('AdminBundle:Actualite')->findAll();

        return $this->render('actualite/index.html.twig', array(
            'actualites' => $actualites,
        ));
    }

    /**
     * Creates a new Actualite entity.
     *
     */
    public function newAction(Request $request)
    {
        $actualite = new Actualite();
        $form = $this->createForm('AdminBundle\Form\ActualiteType', $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $actualite->upload();
            $em->persist($actualite);
            $em->flush();

            return $this->redirectToRoute('actualite_show', array('id' => $actualite->getIdactualite()));
        }

        return $this->render('actualite/new.html.twig', array(
            'actualite' => $actualite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Actualite entity.
     *
     */
    public function showAction(Actualite $actualite)
    {
        $deleteForm = $this->createDeleteForm($actualite);

        return $this->render('actualite/show.html.twig', array(
            'actualite' => $actualite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Actualite entity.
     *
     */
    public function editAction(Request $request, Actualite $actualite)
    {
        $deleteForm = $this->createDeleteForm($actualite);
        $editForm = $this->createForm('AdminBundle\Form\ActualiteType', $actualite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $actualite->upload();
            $em->persist($actualite);
            $em->flush();

            return $this->redirectToRoute('actualite_edit', array('id' => $actualite->getIdactualite()));
        }

        return $this->render('actualite/edit.html.twig', array(
            'actualite' => $actualite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Actualite entity.
     *
     */
    public function deleteAction(Request $request, Actualite $actualite)
    {
        $form = $this->createDeleteForm($actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actualite);
            $em->flush();
        }

        return $this->redirectToRoute('actualite_index');
    }

    /**
     * Creates a form to delete a Actualite entity.
     *
     * @param Actualite $actualite The Actualite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actualite $actualite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actualite_delete', array('id' => $actualite->getIdactualite())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
