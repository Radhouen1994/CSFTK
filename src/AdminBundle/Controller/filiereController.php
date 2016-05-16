<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Filiere;
use AdminBundle\Form\filiereType;

/**
 * filiere controller.
 *
 */
class filiereController extends Controller
{
    /**
     * Lists all filiere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $filieres = $em->getRepository('AdminBundle:Filiere')->findAll();

        return $this->render('filiere/index.html.twig', array(
            'filieres' => $filieres,
        ));
    }

    /**
     * Creates a new filiere entity.
     *
     */
    public function newAction(Request $request)
    {
        $filiere = new filiere();
        $form = $this->createForm('AdminBundle\Form\filiereType', $filiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($filiere);
            $em->flush();

            return $this->redirectToRoute('filiere_show', array('id' => $filiere->getIdfiliere()));
        }

        return $this->render('filiere/new.html.twig', array(
            'filiere' => $filiere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a filiere entity.
     *
     */
    public function showAction(filiere $filiere)
    {
        $deleteForm = $this->createDeleteForm($filiere);

        return $this->render('filiere/show.html.twig', array(
            'filiere' => $filiere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing filiere entity.
     *
     */
    public function editAction(Request $request, filiere $filiere)
    {
        $deleteForm = $this->createDeleteForm($filiere);
        $editForm = $this->createForm('AdminBundle\Form\filiereType', $filiere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($filiere);
            $em->flush();

            return $this->redirectToRoute('filiere_edit', array('id' => $filiere->getIdfiliere()));
        }

        return $this->render('filiere/edit.html.twig', array(
            'filiere' => $filiere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a filiere entity.
     *
     */
    public function deleteAction(Request $request, filiere $filiere)
    {
        $form = $this->createDeleteForm($filiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($filiere);
            $em->flush();
        }

        return $this->redirectToRoute('filiere_index');
    }

    /**
     * Creates a form to delete a filiere entity.
     *
     * @param filiere $filiere The filiere entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(filiere $filiere)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('filiere_delete', array('id' => $filiere->getIdfiliere())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
