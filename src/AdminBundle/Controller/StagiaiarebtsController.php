<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AdminBundle\Entity\Stagiaiarebts;
use AdminBundle\Form\StagiaiarebtsType;

/**
 * Stagiaiarebts controller.
 *
 */
class StagiaiarebtsController extends Controller
{
    /**
     * Lists all Stagiaiarebts entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stagiaiarebts = $em->getRepository('AdminBundle:Stagiaiarebts')->findAll();

        return $this->render('stagiaiarebts/index.html.twig', array(
            'stagiaiarebts' => $stagiaiarebts,
        ));
    }

    /**
     * Creates a new Stagiaiarebts entity.
     *
     */
    public function newAction(Request $request)
    {
        $stagiaiarebt = new Stagiaiarebts();
        $form = $this->createForm('AdminBundle\Form\StagiaiarebtsType', $stagiaiarebt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stagiaiarebt);
            $em->flush();

            return $this->redirectToRoute('stagiaiarebts_show', array('id' => $stagiaiarebt->getIdstagiaiarebts()));
        }

        return $this->render('stagiaiarebts/new.html.twig', array(
            'stagiaiarebt' => $stagiaiarebt,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stagiaiarebts entity.
     *
     */
    public function showAction(Stagiaiarebts $stagiaiarebt)
    {
        $deleteForm = $this->createDeleteForm($stagiaiarebt);

        return $this->render('stagiaiarebts/show.html.twig', array(
            'stagiaiarebt' => $stagiaiarebt,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Stagiaiarebts entity.
     *
     */
    public function editAction(Request $request, Stagiaiarebts $stagiaiarebt)
    {
        $deleteForm = $this->createDeleteForm($stagiaiarebt);
        $editForm = $this->createForm('AdminBundle\Form\StagiaiarebtsType', $stagiaiarebt);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stagiaiarebt);
            $em->flush();

            return $this->redirectToRoute('stagiaiarebts_edit', array('id' => $stagiaiarebt->getIdstagiaiarebts()));
        }

        return $this->render('stagiaiarebts/edit.html.twig', array(
            'stagiaiarebt' => $stagiaiarebt,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Stagiaiarebts entity.
     *
     */
    public function deleteAction(Request $request, Stagiaiarebts $stagiaiarebt)
    {
        $form = $this->createDeleteForm($stagiaiarebt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stagiaiarebt);
            $em->flush();
        }

        return $this->redirectToRoute('stagiaiarebts_index');
    }

    /**
     * Creates a form to delete a Stagiaiarebts entity.
     *
     * @param Stagiaiarebts $stagiaiarebt The Stagiaiarebts entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stagiaiarebts $stagiaiarebt)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stagiaiarebts_delete', array('id' => $stagiaiarebt->getIdstagiaiarebts())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
