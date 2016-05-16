<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetpff
 *
 * @ORM\Table(name="projetpff", indexes={@ORM\Index(name="fk_Projetpff_societepff1_idx", columns={"societepff_idtable1"}), @ORM\Index(name="fk_Projetpff_encadrant1_idx", columns={"encadrant_idEncadrant"}), @ORM\Index(name="fk_Projetpff_stagiaiarebts1_idx", columns={"stagiaiarebts_idStagiaiareBTP"})})
 * @ORM\Entity
 */
class Projetpff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDescriptionPff", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddescriptionpff;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Proposition", type="text", nullable=true)
     */
    private $proposition;

    /**
     * @var string
     *
     * @ORM\Column(name="Resultat", type="text", nullable=true)
     */
    private $resultat;

    /**
     * @var string
     *
     * @ORM\Column(name="Structure", type="text", nullable=true)
     */
    private $structure;

    /**
     * @var string
     *
     * @ORM\Column(name="Outils", type="text", nullable=true)
     */
    private $outils;

    /**
     * @var string
     *
     * @ORM\Column(name="Documentation", type="text", nullable=true)
     */
    private $documentation;

    /**
     * @var string
     *
     * @ORM\Column(name="Materiel", type="text", nullable=true)
     */
    private $materiel;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarque", type="text", nullable=true)
     */
    private $remarque;

    /**
     * @var \Stagiaiarebts
     *
     * @ORM\ManyToOne(targetEntity="Stagiaiarebts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stagiaiarebts_idStagiaiareBTP", referencedColumnName="idStagiaiareBTS")
     * })
     */
    private $stagiaiarebtsstagiaiarebtp;

    /**
     * @var \Encadrant
     *
     * @ORM\ManyToOne(targetEntity="Encadrant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="encadrant_idEncadrant", referencedColumnName="idEncadrant")
     * })
     */
    private $encadrantencadrant;

    /**
     * @var \Societepff
     *
     * @ORM\ManyToOne(targetEntity="Societepff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="societepff_idtable1", referencedColumnName="idtable1")
     * })
     */
    private $societepfftable1;



    /**
     * Get iddescriptionpff
     *
     * @return integer
     */
    public function getIddescriptionpff()
    {
        return $this->iddescriptionpff;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Projetpff
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
     * Set proposition
     *
     * @param string $proposition
     *
     * @return Projetpff
     */
    public function setProposition($proposition)
    {
        $this->proposition = $proposition;

        return $this;
    }

    /**
     * Get proposition
     *
     * @return string
     */
    public function getProposition()
    {
        return $this->proposition;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     *
     * @return Projetpff
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set structure
     *
     * @param string $structure
     *
     * @return Projetpff
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set outils
     *
     * @param string $outils
     *
     * @return Projetpff
     */
    public function setOutils($outils)
    {
        $this->outils = $outils;

        return $this;
    }

    /**
     * Get outils
     *
     * @return string
     */
    public function getOutils()
    {
        return $this->outils;
    }

    /**
     * Set documentation
     *
     * @param string $documentation
     *
     * @return Projetpff
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;

        return $this;
    }

    /**
     * Get documentation
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Set materiel
     *
     * @param string $materiel
     *
     * @return Projetpff
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get materiel
     *
     * @return string
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return Projetpff
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set stagiaiarebtsstagiaiarebtp
     *
     * @param \AdminBundle\Entity\Stagiaiarebts $stagiaiarebtsstagiaiarebtp
     *
     * @return Projetpff
     */
    public function setStagiaiarebtsstagiaiarebtp(\AdminBundle\Entity\Stagiaiarebts $stagiaiarebtsstagiaiarebtp = null)
    {
        $this->stagiaiarebtsstagiaiarebtp = $stagiaiarebtsstagiaiarebtp;

        return $this;
    }

    /**
     * Get stagiaiarebtsstagiaiarebtp
     *
     * @return \AdminBundle\Entity\Stagiaiarebts
     */
    public function getStagiaiarebtsstagiaiarebtp()
    {
        return $this->stagiaiarebtsstagiaiarebtp;
    }

    /**
     * Set encadrantencadrant
     *
     * @param \AdminBundle\Entity\Encadrant $encadrantencadrant
     *
     * @return Projetpff
     */
    public function setEncadrantencadrant(\AdminBundle\Entity\Encadrant $encadrantencadrant = null)
    {
        $this->encadrantencadrant = $encadrantencadrant;

        return $this;
    }

    /**
     * Get encadrantencadrant
     *
     * @return \AdminBundle\Entity\Encadrant
     */
    public function getEncadrantencadrant()
    {
        return $this->encadrantencadrant;
    }

    /**
     * Set societepfftable1
     *
     * @param \AdminBundle\Entity\Societepff $societepfftable1
     *
     * @return Projetpff
     */
    public function setSocietepfftable1(\AdminBundle\Entity\Societepff $societepfftable1 = null)
    {
        $this->societepfftable1 = $societepfftable1;

        return $this;
    }

    /**
     * Get societepfftable1
     *
     * @return \AdminBundle\Entity\Societepff
     */
    public function getSocietepfftable1()
    {
        return $this->societepfftable1;
    }
}
