<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeOperation
 *
 * @ORM\Table(name="type_operation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeOperationRepository")
 */
class TypeOperation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="LibelleTypeOperation", type="string", length=255)
     */
    private $libelleTypeOperation;

    /**
     *
     * @var CompteCompta $compteCompta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CompteCompta",inversedBy="numCptTypeOperation",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $compteCompta;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Importation",mappedBy="typeOperation",cascade={"remove"})
     */

    private $importation;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->importation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set libelleTypeOperation
     *
     * @param string $libelleTypeOperation
     *
     * @return TypeOperation
     */
    public function setLibelleTypeOperation($libelleTypeOperation)
    {
        $this->libelleTypeOperation = $libelleTypeOperation;

        return $this;
    }

    /**
     * Get libelleTypeOperation
     *
     * @return string
     */
    public function getLibelleTypeOperation()
    {
        return $this->libelleTypeOperation;
    }

    /**
     * Set compteCompta
     *
     * @param \AppBundle\Entity\CompteCompta $compteCompta
     *
     * @return TypeOperation
     */
    public function setCompteCompta(\AppBundle\Entity\CompteCompta $compteCompta = null)
    {
        $this->compteCompta = $compteCompta;

        return $this;
    }

    /**
     * Get compteCompta
     *
     * @return \AppBundle\Entity\CompteCompta
     */
    public function getCompteCompta()
    {
        return $this->compteCompta;
    }

    /**
     * Add importation
     *
     * @param \AppBundle\Entity\Importation $importation
     *
     * @return TypeOperation
     */
    public function addImportation(\AppBundle\Entity\Importation $importation)
    {
        $this->importation[] = $importation;

        return $this;
    }

    /**
     * Remove importation
     *
     * @param \AppBundle\Entity\Importation $importation
     */
    public function removeImportation(\AppBundle\Entity\Importation $importation)
    {
        $this->importation->removeElement($importation);
    }

    /**
     * Get importation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImportation()
    {
        return $this->importation;
    }
}
