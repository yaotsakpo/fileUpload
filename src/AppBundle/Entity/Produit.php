<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="NomProduit", type="string", length=255)
     */
    private $nomProduit;


    /**
     * @var string
     *
     * @ORM\Column(name="NnumeroDeCodeProduit", type="string", length=255)
     */
    private $numeroDeCodeProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="numCptCredit", type="string", length=255)
     */
    private $numCptCredit;



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
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * @return mixed
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param mixed $operations
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return string
     */
    public function getNumeroDeCodeProduit()
    {
        return $this->numeroDeCodeProduit;
    }

    /**
     * @param string $numeroDeCodeProduit
     */
    public function setNumeroDeCodeProduit($numeroDeCodeProduit)
    {
        $this->numeroDeCodeProduit = $numeroDeCodeProduit;
    }

  

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set numCptCredit
     *
     * @param string $numCptCredit
     *
     * @return Produit
     */
    public function setNumCptCredit($numCptCredit)
    {
        $this->numCptCredit = $numCptCredit;

        return $this;
    }

    /**
     * Get numCptCredit
     *
     * @return string
     */
    public function getNumCptCredit()
    {
        return $this->numCptCredit;
    }

    /**
     * Add operation
     *
     * @param \AppBundle\Entity\OperationCaisse $operation
     *
     * @return Produit
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
}
