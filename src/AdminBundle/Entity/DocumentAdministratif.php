<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentAdministratif
 *
 * @ORM\Table(name="document_administratif")
 * @ORM\Entity
 */
class DocumentAdministratif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddocument", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocument;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=true)
     */
    private $path;



    /**
     * Get iddocument
     *
     * @return integer
     */
    public function getIddocument()
    {
        return $this->iddocument;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return DocumentAdministratif
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
     * Set path
     *
     * @param string $path
     *
     * @return DocumentAdministratif
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

        return __DIR__."../../../../web/bundles/admin/Galerie_photo/uploads";

    }

    public function upload()
    {

        $this->path->move($this->getUploadDir(),$this->path->getClientOriginalName());
        $this->path=$this->path->getClientOriginalName();
    }
}
