<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsablepff
 *
 * @ORM\Table(name="responsablepff", indexes={@ORM\Index(name="fk_responsablepff_societepff1_idx", columns={"societepff_idtable1"})})
 * @ORM\Entity
 */
class Responsablepff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idResponsablePff", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresponsablepff;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=45, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=45, nullable=true)
     */
    private $fonction;

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
     * Get idresponsablepff
     *
     * @return integer
     */
    public function getIdresponsablepff()
    {
        return $this->idresponsablepff;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Responsablepff
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Responsablepff
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Responsablepff
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Responsablepff
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Responsablepff
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set societepfftable1
     *
     * @param \AdminBundle\Entity\Societepff $societepfftable1
     *
     * @return Responsablepff
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
