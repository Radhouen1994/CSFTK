<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VerifInscri
 *
 * @ORM\Table(name="verif_inscri")
 * @ORM\Entity
 */
class VerifInscri
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVerif_Inscri", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idverifInscri;

    /**
     * @var string
     *
     * @ORM\Column(name="Ver_cin", type="string", length=45, nullable=true)
     */
    private $verCin;

    /**
     * @var string
     *
     * @ORM\Column(name="Ver_nomDoss", type="string", length=45, nullable=true)
     */
    private $verNomdoss;



    /**
     * Get idverifInscri
     *
     * @return integer
     */
    public function getIdverifInscri()
    {
        return $this->idverifInscri;
    }

    /**
     * Set verCin
     *
     * @param string $verCin
     *
     * @return VerifInscri
     */
    public function setVerCin($verCin)
    {
        $this->verCin = $verCin;

        return $this;
    }

    /**
     * Get verCin
     *
     * @return string
     */
    public function getVerCin()
    {
        return $this->verCin;
    }

    /**
     * Set verNomdoss
     *
     * @param string $verNomdoss
     *
     * @return VerifInscri
     */
    public function setVerNomdoss($verNomdoss)
    {
        $this->verNomdoss = $verNomdoss;

        return $this;
    }

    /**
     * Get verNomdoss
     *
     * @return string
     */
    public function getVerNomdoss()
    {
        return $this->verNomdoss;
    }
}
