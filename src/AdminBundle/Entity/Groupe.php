<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */

    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=45, nullable=true)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=45, nullable=true)
     */
    private $emploi;

    /**
     * @var string
     *
     * @ORM\Column(name="cal", type="string", length=45, nullable=true)
     */
    private $cal;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;



    /**
     * Get idgroupe
     *
     * @return integer
     */
    public function getIdgroupe()
    {
        return $this->idgroupe;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Groupe
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
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Groupe
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
     * Set emploi
     *
     * @param string $emploi
     *
     * @return Groupe
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi
     *
     * @return string
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * Set cal
     *
     * @param string $cal
     *
     * @return Groupe
     */
    public function setCal($cal)
    {
        $this->cal = $cal;

        return $this;
    }

    /**
     * Get cal
     *
     * @return string
     */
    public function getCal()
    {
        return $this->cal;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Groupe
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

    public function getUploadDir()
    {

        return __DIR__."../../../../web/bundles/admin/Groupe/Calendrier/uploads";

    }

    public function upload()
    {
        $file=array($this->getEmploi(),$this->getCal());
        $this->cal->move($this->getUploadDir(),$this->cal->getClientOriginalName());
        $this->cal=$this->cal->getClientOriginalName();
    }




}
