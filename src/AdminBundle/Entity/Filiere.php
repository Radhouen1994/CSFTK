<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity
 */
class Filiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfiliere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfiliere;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prog", type="string", length=45, nullable=true)
     */
    private $prog;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;



    /**
     * Get idfiliere
     *
     * @return integer
     */
    public function getIdfiliere()
    {
        return $this->idfiliere;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Filiere
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
     * Set prog
     *
     * @param string $prog
     *
     * @return Filiere
     */
    public function setProg($prog)
    {
        $this->prog = $prog;

        return $this;
    }

    /**
     * Get prog
     *
     * @return string
     */
    public function getProg()
    {
        return $this->prog;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Filiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
