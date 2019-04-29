<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassCompta
 *
 * @ORM\Table(name="class_compta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClassComptaRepository")
 */
class ClassCompta
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="num", type="string", length=255)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @var ArrayCollection compteComptas
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CompteCompta",mappedBy="classCompta",cascade={"remove"})
     */

    private $compteComptas;



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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ClassCompta
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
     * Set num
     *
     * @param string $num
     *
     * @return ClassCompta
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
     * Set description
     *
     * @param string $description
     *
     * @return ClassCompta
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
     * Constructor
     */
    public function __construct()
    {
        $this->compteComptas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add compteCompta
     *
     * @param \AppBundle\Entity\CompteCompta $compteCompta
     *
     * @return ClassCompta
     */
    public function addCompteCompta(\AppBundle\Entity\CompteCompta $compteCompta)
    {
        $this->compteComptas[] = $compteCompta;

        return $this;
    }

    /**
     * Remove compteCompta
     *
     * @param \AppBundle\Entity\CompteCompta $compteCompta
     */
    public function removeCompteCompta(\AppBundle\Entity\CompteCompta $compteCompta)
    {
        $this->compteComptas->removeElement($compteCompta);
    }

    /**
     * Get compteComptas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompteComptas()
    {
        return $this->compteComptas;
    }
}
