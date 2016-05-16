<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat", indexes={@ORM\Index(name="fk_Resultat_formateur1_idx", columns={"formateur_idformateur"})})
 * @ORM\Entity
 */
class Resultat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idResultat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresultat;

    /**
     * @var string
     *
     * @ORM\Column(name="Module", type="string", length=45, nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialite", type="string", length=45, nullable=true)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=true)
     */
    private $path;

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
     * Get idresultat
     *
     * @return integer
     */
    public function getIdresultat()
    {
        return $this->idresultat;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return Resultat
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Resultat
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
     * Set path
     *
     * @param string $path
     *
     * @return Resultat
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set formateurformateur
     *
     * @param \AdminBundle\Entity\Formateur $formateurformateur
     *
     * @return Resultat
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
