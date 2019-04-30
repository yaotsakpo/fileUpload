<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table(name="banque")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BanqueRepository")
 */
class Banque
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
     * @ORM\Column(name="nomDeLaBanque", type="string", length=255)
     */
    private $nomDeLaBanque;

    /**
     *
     * @var CompteCompta $compteCompta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CompteCompta",inversedBy="banque",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $compteCompta;


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
     * Set nomDeLaBanque
     *
     * @param string $nomDeLaBanque
     *
     * @return Banque
     */
    public function setNomDeLaBanque($nomDeLaBanque)
    {
        $this->nomDeLaBanque = $nomDeLaBanque;

        return $this;
    }

    /**
     * Get nomDeLaBanque
     *
     * @return string
     */
    public function getNomDeLaBanque()
    {
        return $this->nomDeLaBanque;
    }

    /**
     * Set compteCompta
     *
     * @param \AppBundle\Entity\CompteCompta $compteCompta
     *
     * @return Banque
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
}
