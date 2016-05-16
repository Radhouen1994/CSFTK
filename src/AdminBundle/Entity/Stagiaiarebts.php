<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaiarebts
 *
 * @ORM\Table(name="stagiaiarebts", indexes={@ORM\Index(name="fk_StagiaiareBTS_groupe1_idx", columns={"groupe_idgroupe"}), @ORM\Index(name="fk_stagiaiarebts_session1_idx", columns={"session_idsession"})})
 * @ORM\Entity
 */
class Stagiaiarebts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStagiaiareBTS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstagiaiarebts;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenoml", type="string", length=45, nullable=true)
     */
    private $prenoml;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=45, nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=45, nullable=true)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="PFF", type="integer", nullable=true)
     */
    private $pff;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=45, nullable=true)
     */
    private $photo;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupe_idgroupe", referencedColumnName="idgroupe")
     * })
     */
    private $groupegroupe;

    /**
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_idsession", referencedColumnName="idsession")
     * })
     */
    private $sessionsession;



    /**
     * Get idstagiaiarebts
     *
     * @return integer
     */
    public function getIdstagiaiarebts()
    {
        return $this->idstagiaiarebts;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Stagiaiarebts
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
     * Set prenoml
     *
     * @param string $prenoml
     *
     * @return Stagiaiarebts
     */
    public function setPrenoml($prenoml)
    {
        $this->prenoml = $prenoml;

        return $this;
    }

    /**
     * Get prenoml
     *
     * @return string
     */
    public function getPrenoml()
    {
        return $this->prenoml;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Stagiaiarebts
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Stagiaiarebts
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
     * Set email
     *
     * @param string $email
     *
     * @return Stagiaiarebts
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
     * Set pff
     *
     * @param integer $pff
     *
     * @return Stagiaiarebts
     */
    public function setPff($pff)
    {
        $this->pff = $pff;

        return $this;
    }

    /**
     * Get pff
     *
     * @return integer
     */
    public function getPff()
    {
        return $this->pff;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Stagiaiarebts
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set groupegroupe
     *
     * @param \AdminBundle\Entity\Groupe $groupegroupe
     *
     * @return Stagiaiarebts
     */
    public function setGroupegroupe(\AdminBundle\Entity\Groupe $groupegroupe = null)
    {
        $this->groupegroupe = $groupegroupe;

        return $this;
    }

    /**
     * Get groupegroupe
     *
     * @return \AdminBundle\Entity\Groupe
     */
    public function getGroupegroupe()
    {
        return $this->groupegroupe;
    }

    /**
     * Set sessionsession
     *
     * @param \AdminBundle\Entity\Session $sessionsession
     *
     * @return Stagiaiarebts
     */
    public function setSessionsession(\AdminBundle\Entity\Session $sessionsession = null)
    {
        $this->sessionsession = $sessionsession;

        return $this;
    }

    /**
     * Get sessionsession
     *
     * @return \AdminBundle\Entity\Session
     */
    public function getSessionsession()
    {
        return $this->sessionsession;
    }
}
