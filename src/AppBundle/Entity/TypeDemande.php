<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDemande
 *
 * @ORM\Table(name="type_demande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeDemandeRepository")
 */
class TypeDemande
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
     * @var ArrayCollection demandePermissions
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DemandePermission",mappedBy="type",cascade={"remove"})
     */

    private $demandePermissions;


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
     * @return TypeDemande
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
     * Constructor
     */
    public function __construct()
    {
        $this->demandePermissions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add demandePermission
     *
     * @param \AppBundle\Entity\DemandePermission $demandePermission
     *
     * @return TypeDemande
     */
    public function addDemandePermission(\AppBundle\Entity\DemandePermission $demandePermission)
    {
        $this->demandePermissions[] = $demandePermission;

        return $this;
    }

    /**
     * Remove demandePermission
     *
     * @param \AppBundle\Entity\DemandePermission $demandePermission
     */
    public function removeDemandePermission(\AppBundle\Entity\DemandePermission $demandePermission)
    {
        $this->demandePermissions->removeElement($demandePermission);
    }

    /**
     * Get demandePermissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemandePermissions()
    {
        return $this->demandePermissions;
    }
}
