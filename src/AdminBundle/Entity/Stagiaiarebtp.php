<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaiarebtp
 *
 * @ORM\Table(name="stagiaiarebtp", indexes={@ORM\Index(name="fk_StagiaiareBTP_groupe_idx", columns={"groupe_idgroupe"}), @ORM\Index(name="fk_stagiaiarebtp_session1_idx", columns={"session_idsession"})})
 * @ORM\Entity
 */
class Stagiaiarebtp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStagiaiareBTP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstagiaiarebtp;

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
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

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
     * Get idstagiaiarebtp
     *
     * @return integer
     */
    public function getIdstagiaiarebtp()
    {
        return $this->idstagiaiarebtp;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Stagiaiarebtp
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
     * @return Stagiaiarebtp
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
     * @return Stagiaiarebtp
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
     * Set email
     *
     * @param string $email
     *
     * @return Stagiaiarebtp
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Stagiaiarebtp
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
     * @return Stagiaiarebtp
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
     * @return Stagiaiarebtp
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
