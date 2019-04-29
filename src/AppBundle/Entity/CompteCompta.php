<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteCompta
 *
 * @ORM\Table(name="compte_compta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompteComptaRepository")
 */
class CompteCompta
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
     * @ORM\Column(name="num", type="string", length=255)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     *
     * @var AppBundle\Entity\ClassCompta $classCompta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ClassCompta",inversedBy="compteComptas")
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $classCompta;


    /**                                     
    * @ORM\OneToMany(targetEntity="CompteCompta", mappedBy="parent",cascade={"persist"})                                     
    */                                     
    private $compteTiers;   


    /**                               
    * @ORM\ManyToOne(targetEntity="CompteCompta", inversedBy="compteTiers")                                
    * @ORM\JoinColumn(name="parent", referencedColumnName="id",nullable=true,unique=false,onDelete="SET NULL")                                     
    */                                     
    private $parent;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Produit",mappedBy="compteCompta",cascade={"remove"})
     */

    private $numCptProduit;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TypeOperation",mappedBy="compteCompta",cascade={"remove"})
     */

    private $numCptTypeOperation;



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
        $this->compteTiers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numCptProduit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numCptTypeOperation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Constructor
     */
    public function __toString()
    {
        return $this->num;
    }

    /**
     * Set num
     *
     * @param string $num
     *
     * @return CompteCompta
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return CompteCompta
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CompteCompta
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

    /**
     * Set classCompta
     *
     * @param \AppBundle\Entity\ClassCompta $classCompta
     *
     * @return CompteCompta
     */
    public function setClassCompta(\AppBundle\Entity\ClassCompta $classCompta)
    {
        $this->classCompta = $classCompta;

        return $this;
    }

    /**
     * Get classCompta
     *
     * @return \AppBundle\Entity\ClassCompta
     */
    public function getClassCompta()
    {
        return $this->classCompta;
    }

    /**
     * Add compteTier
     *
     * @param \AppBundle\Entity\CompteCompta $compteTier
     *
     * @return CompteCompta
     */
    public function addCompteTier(\AppBundle\Entity\CompteCompta $compteTier)
    {
        $this->compteTiers[] = $compteTier;

        return $this;
    }

    /**
     * Remove compteTier
     *
     * @param \AppBundle\Entity\CompteCompta $compteTier
     */
    public function removeCompteTier(\AppBundle\Entity\CompteCompta $compteTier)
    {
        $this->compteTiers->removeElement($compteTier);
    }

    /**
     * Get compteTiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompteTiers()
    {
        return $this->compteTiers;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\CompteCompta $parent
     *
     * @return CompteCompta
     */
    public function setParent(\AppBundle\Entity\CompteCompta $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\CompteCompta
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add numCptProduit
     *
     * @param \AppBundle\Entity\Produit $numCptProduit
     *
     * @return CompteCompta
     */
    public function addNumCptProduit(\AppBundle\Entity\Produit $numCptProduit)
    {
        $this->numCptProduit[] = $numCptProduit;

        return $this;
    }

    /**
     * Remove numCptProduit
     *
     * @param \AppBundle\Entity\Produit $numCptProduit
     */
    public function removeNumCptProduit(\AppBundle\Entity\Produit $numCptProduit)
    {
        $this->numCptProduit->removeElement($numCptProduit);
    }

    /**
     * Get numCptProduit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNumCptProduit()
    {
        return $this->numCptProduit;
    }

    /**
     * Add numCptTypeOperation
     *
     * @param \AppBundle\Entity\TypeOperation $numCptTypeOperation
     *
     * @return CompteCompta
     */
    public function addNumCptTypeOperation(\AppBundle\Entity\TypeOperation $numCptTypeOperation)
    {
        $this->numCptTypeOperation[] = $numCptTypeOperation;

        return $this;
    }

    /**
     * Remove numCptTypeOperation
     *
     * @param \AppBundle\Entity\TypeOperation $numCptTypeOperation
     */
    public function removeNumCptTypeOperation(\AppBundle\Entity\TypeOperation $numCptTypeOperation)
    {
        $this->numCptTypeOperation->removeElement($numCptTypeOperation);
    }

    /**
     * Get numCptTypeOperation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNumCptTypeOperation()
    {
        return $this->numCptTypeOperation;
    }
}
