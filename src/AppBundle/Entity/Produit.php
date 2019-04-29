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
     *
     * @var CompteCompta $compteCompta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CompteCompta",inversedBy="numCptProduit",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $compteCompta;


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
     * Set numeroDeCodeProduit
     *
     * @param string $numeroDeCodeProduit
     *
     * @return Produit
     */
    public function setNumeroDeCodeProduit($numeroDeCodeProduit)
    {
        $this->numeroDeCodeProduit = $numeroDeCodeProduit;

        return $this;
    }

    /**
     * Get numeroDeCodeProduit
     *
     * @return string
     */
    public function getNumeroDeCodeProduit()
    {
        return $this->numeroDeCodeProduit;
    }

    /**
     * Set compteCompta
     *
     * @param \AppBundle\Entity\CompteCompta $compteCompta
     *
     * @return Produit
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
