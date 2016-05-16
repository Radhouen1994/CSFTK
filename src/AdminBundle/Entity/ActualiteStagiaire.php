<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActualiteStagiaire
 *
 * @ORM\Table(name="actualite_stagiaire")
 * @ORM\Entity
 */
class ActualiteStagiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idActualite_Stagiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactualiteStagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;



    /**
     * Get idactualiteStagiaire
     *
     * @return integer
     */
    public function getIdactualiteStagiaire()
    {
        return $this->idactualiteStagiaire;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return ActualiteStagiaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return ActualiteStagiaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
