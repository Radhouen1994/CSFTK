<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prebts
 *
 * @ORM\Table(name="prebts")
 * @ORM\Entity
 */
class Prebts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpreBTS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprebts;

    /**
     * @var string
     *
     * @ORM\Column(name="numDossier", type="string", length=45, nullable=true)
     */
    private $numdossier;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=45, nullable=true)
     */
    private $cin;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date", nullable=true)
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=45, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=45, nullable=true)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=45, nullable=true)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="moyenne", type="string", length=45, nullable=true)
     */
    private $moyenne;

    /**
     * @var string
     *
     * @ORM\Column(name="math", type="string", length=45, nullable=true)
     */
    private $math;

    /**
     * @var string
     *
     * @ORM\Column(name="physique", type="string", length=45, nullable=true)
     */
    private $physique;

    /**
     * @var string
     *
     * @ORM\Column(name="francais", type="string", length=45, nullable=true)
     */
    private $francais;

    /**
     * @var string
     *
     * @ORM\Column(name="anglais", type="string", length=45, nullable=true)
     */
    private $anglais;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=45, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=45, nullable=true)
     */
    private $specialite;



    /**
     * Get idprebts
     *
     * @return integer
     */
    public function getIdprebts()
    {
        return $this->idprebts;
    }

    /**
     * Set numdossier
     *
     * @param string $numdossier
     *
     * @return Prebts
     */
    public function setNumdossier($numdossier)
    {
        $this->numdossier = $numdossier;

        return $this;
    }

    /**
     * Get numdossier
     *
     * @return string
     */
    public function getNumdossier()
    {
        return $this->numdossier;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Prebts
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Prebts
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
     * @return Prebts
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
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return Prebts
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Prebts
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Prebts
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     *
     * @return Prebts
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return string
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Prebts
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set moyenne
     *
     * @param string $moyenne
     *
     * @return Prebts
     */
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get moyenne
     *
     * @return string
     */
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set math
     *
     * @param string $math
     *
     * @return Prebts
     */
    public function setMath($math)
    {
        $this->math = $math;

        return $this;
    }

    /**
     * Get math
     *
     * @return string
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * Set physique
     *
     * @param string $physique
     *
     * @return Prebts
     */
    public function setPhysique($physique)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return string
     */
    public function getPhysique()
    {
        return $this->physique;
    }

    /**
     * Set francais
     *
     * @param string $francais
     *
     * @return Prebts
     */
    public function setFrancais($francais)
    {
        $this->francais = $francais;

        return $this;
    }

    /**
     * Get francais
     *
     * @return string
     */
    public function getFrancais()
    {
        return $this->francais;
    }

    /**
     * Set anglais
     *
     * @param string $anglais
     *
     * @return Prebts
     */
    public function setAnglais($anglais)
    {
        $this->anglais = $anglais;

        return $this;
    }

    /**
     * Get anglais
     *
     * @return string
     */
    public function getAnglais()
    {
        return $this->anglais;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Prebts
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Prebts
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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Prebts
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Prebts
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
}
