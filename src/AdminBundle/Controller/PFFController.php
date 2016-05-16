<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Stagiaiarebts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class PFFController extends Controller
{
    public function AjoutStagiaire(Request $request)
    {
        $Stag=new Stagiaiarebts();




        if($request->getMethod()=='POST'){

            $connexion = $this->getDoctrine()->getManager();


            $connexion->persist($Stag);

            return $this->redirect($this->generateUrl(''));

        }

    }
}
