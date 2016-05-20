<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\DocumentAdministratif;
use AdminBundle\Form\DocumentAdministratifType;

/**
 * DocumentAdministratif controller.
 *
 */
class DocumentAdministratifController extends Controller
{
    /**
     * Lists all DocumentAdministratif entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentAdministratifs = $em->getRepository('AdminBundle:DocumentAdministratif')->findAll();

        return $this->render('documentadministratif/index.html.twig', array(
            'documentAdministratifs' => $documentAdministratifs,
        ));
    }

    /**
     * Creates a new DocumentAdministratif entity.
     *
     */
    public function newAction(Request $request)
    {
        $documentAdministratif = new DocumentAdministratif();
        $form = $this->createForm('AdminBundle\Form\DocumentAdministratifType', $documentAdministratif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $documentAdministratif->upload();
            $em->persist($documentAdministratif);
            $em->flush();

            return $this->redirectToRoute('documentadministratif_show', array('id' => $documentAdministratif->getIddocument()));
        }

        return $this->render('documentadministratif/new.html.twig', array(
            'documentAdministratif' => $documentAdministratif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DocumentAdministratif entity.
     *
     */
    public function showAction(DocumentAdministratif $documentAdministratif)
    {
        $deleteForm = $this->createDeleteForm($documentAdministratif);

        return $this->render('documentadministratif/show.html.twig', array(
            'documentAdministratif' => $documentAdministratif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DocumentAdministratif entity.
     *
     */
    public function editAction(Request $request, DocumentAdministratif $documentAdministratif)
    {
        $deleteForm = $this->createDeleteForm($documentAdministratif);
        $editForm = $this->createForm('AdminBundle\Form\DocumentAdministratifType', $documentAdministratif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $documentAdministratif->upload();
            $em->persist($documentAdministratif);
            $em->flush();

            return $this->redirectToRoute('documentadministratif_edit', array('id' => $documentAdministratif->getIddocument()));
        }

        return $this->render('documentadministratif/edit.html.twig', array(
            'documentAdministratif' => $documentAdministratif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DocumentAdministratif entity.
     *
     */
    public function deleteAction(Request $request, DocumentAdministratif $documentAdministratif)
    {
        $form = $this->createDeleteForm($documentAdministratif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documentAdministratif);
            $em->flush();
        }

        return $this->redirectToRoute('documentadministratif_index');
    }

    /**
     * Creates a form to delete a DocumentAdministratif entity.
     *
     * @param DocumentAdministratif $documentAdministratif The DocumentAdministratif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DocumentAdministratif $documentAdministratif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentadministratif_delete', array('id' => $documentAdministratif->getIddocument())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
