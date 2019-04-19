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
     * @var int
     *
     * @ORM\Column(name="numCptDispatch", type="integer")
     */
    private $numCptDispatch;


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
     * Set numCptDispatch
     *
     * @param integer $numCptDispatch
     *
     * @return Banque
     */
    public function setNumCptDispatch($numCptDispatch)
    {
        $this->numCptDispatch = $numCptDispatch;

        return $this;
    }

    /**
     * Get numCptDispatch
     *
     * @return int
     */
    public function getNumCptDispatch()
    {
        return $this->numCptDispatch;
    }
}