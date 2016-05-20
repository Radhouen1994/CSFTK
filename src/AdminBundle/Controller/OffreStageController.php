<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\OffreStage;
use AdminBundle\Form\OffreStageType;

/**
 * OffreStage controller.
 *
 */
class OffreStageController extends Controller
{
    /**
     * Lists all OffreStage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offreStages = $em->getRepository('AdminBundle:OffreStage')->findAll();

        return $this->render('offrestage/index.html.twig', array(
            'offreStages' => $offreStages,
        ));
    }

    /**
     * Creates a new OffreStage entity.
     *
     */
    public function newAction(Request $request)
    {
        $offreStage = new OffreStage();
        $form = $this->createForm('AdminBundle\Form\OffreStageType', $offreStage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $offreStage->upload();
            $em->persist($offreStage);
            $em->flush();

            return $this->redirectToRoute('offrestage_show', array('id' => $offreStage->getIdoffreStage()));
        }

        return $this->render('offrestage/new.html.twig', array(
            'offreStage' => $offreStage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OffreStage entity.
     *
     */
    public function showAction(OffreStage $offreStage)
    {
        $deleteForm = $this->createDeleteForm($offreStage);

        return $this->render('offrestage/show.html.twig', array(
            'offreStage' => $offreStage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OffreStage entity.
     *
     */
    public function editAction(Request $request, OffreStage $offreStage)
    {
        $deleteForm = $this->createDeleteForm($offreStage);
        $editForm = $this->createForm('AdminBundle\Form\OffreStageType', $offreStage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $offreStage->upload();
            $em->persist($offreStage);
            $em->flush();

            return $this->redirectToRoute('offrestage_edit', array('id' => $offreStage->getIdoffreStage()));
        }

        return $this->render('offrestage/edit.html.twig', array(
            'offreStage' => $offreStage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OffreStage entity.
     *
     */
    public function deleteAction(Request $request, OffreStage $offreStage)
    {
        $form = $this->createDeleteForm($offreStage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offreStage);
            $em->flush();
        }

        return $this->redirectToRoute('offrestage_index');
    }

    /**
     * Creates a form to delete a OffreStage entity.
     *
     * @param OffreStage $offreStage The OffreStage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OffreStage $offreStage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offrestage_delete', array('id' => $offreStage->getIdoffreStage())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
