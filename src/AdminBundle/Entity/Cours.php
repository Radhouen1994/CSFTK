<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="fk_cours_formateur1_idx", columns={"formateur_idformateur"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=45, nullable=true)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="pathCours", type="string", length=45, nullable=true)
     */
    private $pathcours;

    /**
     * @var string
     *
     * @ORM\Column(name="anne", type="string", length=45, nullable=true)
     */
    private $anne;

    /**
     * @var \Formateur
     *
     * @ORM\ManyToOne(targetEntity="Formateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formateur_idformateur", referencedColumnName="idformateur")
     * })
     */
    private $formateurformateur;



    /**
     * Get idcours
     *
     * @return integer
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Cours
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
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Cours
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set pathcours
     *
     * @param string $pathcours
     *
     * @return Cours
     */
    public function setPathcours($pathcours)
    {
        $this->pathcours = $pathcours;

        return $this;
    }

    /**
     * Get pathcours
     *
     * @return string
     */
    public function getPathcours()
    {
        return $this->pathcours;
    }

    /**
     * Set anne
     *
     * @param string $anne
     *
     * @return Cours
     */
    public function setAnne($anne)
    {
        $this->anne = $anne;

        return $this;
    }

    /**
     * Get anne
     *
     * @return string
     */
    public function getAnne()
    {
        return $this->anne;
    }

    /**
     * Set formateurformateur
     *
     * @param \AdminBundle\Entity\Formateur $formateurformateur
     *
     * @return Cours
     */
    public function setFormateurformateur(\AdminBundle\Entity\Formateur $formateurformateur = null)
    {
        $this->formateurformateur = $formateurformateur;

        return $this;
    }

    /**
     * Get formateurformateur
     *
     * @return \AdminBundle\Entity\Formateur
     */
    public function getFormateurformateur()
    {
        return $this->formateurformateur;
    }
}
