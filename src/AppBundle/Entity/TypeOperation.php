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
     * @var string
     *
     * @ORM\Column(name="numCptDebit", type="string", length=255)
     */
    private $numCptDebit;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\OperationCaisse",mappedBy="produit",cascade={"remove"})
     */

    private $operations;


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
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set numCptDebit
     *
     * @param string $numCptDebit
     *
     * @return TypeOperation
     */
    public function setNumCptDebit($numCptDebit)
    {
        $this->numCptDebit = $numCptDebit;

        return $this;
    }

    /**
     * Get numCptDebit
     *
     * @return string
     */
    public function getNumCptDebit()
    {
        return $this->numCptDebit;
    }

    /**
     * Add operation
     *
     * @param \AppBundle\Entity\OperationCaisse $operation
     *
     * @return TypeOperation
     */
    public function addOperation(\AppBundle\Entity\OperationCaisse $operation)
    {
        $this->operations[] = $operation;

        return $this;
    }

    /**
     * Remove operation
     *
     * @param \AppBundle\Entity\OperationCaisse $operation
     */
    public function removeOperation(\AppBundle\Entity\OperationCaisse $operation)
    {
        $this->operations->removeElement($operation);
    }

    /**
     * Get operations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOperations()
    {
        return $this->operations;
    }
}