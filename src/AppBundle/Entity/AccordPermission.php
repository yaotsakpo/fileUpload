<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccordPermission
 *
 * @ORM\Table(name="accord_permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccordPermissionRepository")
 */
class AccordPermission
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateAccordPermission", type="datetime")
     */
    private $dateAccordPermission;


    /**
     * @var int
     *
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;


    /**
     *
     * @var DemandePermision $demande
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DemandePermission",inversedBy="accordsPermissions")
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $demande;


   /**
     *
     * @var UserBundle\Entity\User $accordeur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User",inversedBy="accordsPermissions")
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $accordeur;





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
     * Set dateAccordPermission
     *
     * @param \DateTime $dateAccordPermission
     *
     * @return AccordPermission
     */
    public function setDateAccordPermission($dateAccordPermission)
    {
        $this->dateAccordPermission = $dateAccordPermission;

        return $this;
    }

    /**
     * Get dateAccordPermission
     *
     * @return \DateTime
     */
    public function getDateAccordPermission()
    {
        return $this->dateAccordPermission;
    }

    /**
     * Set demande
     *
     * @param \AppBundle\Entity\DemandePermission $demande
     *
     * @return AccordPermission
     */
    public function setDemande(\AppBundle\Entity\DemandePermission $demande)
    {
        $this->demande = $demande;

        return $this;
    }

    /**
     * Get demande
     *
     * @return \AppBundle\Entity\DemandePermission
     */
    public function getDemande()
    {
        return $this->demande;
    }

    /**
     * Set accordeur
     *
     * @param \UserBundle\Entity\User $accordeur
     *
     * @return AccordPermission
     */
    public function setAccordeur(\UserBundle\Entity\User $accordeur)
    {
        $this->accordeur = $accordeur;

        return $this;
    }

    /**
     * Get accordeur
     *
     * @return \UserBundle\Entity\User
     */
    public function getAccordeur()
    {
        return $this->accordeur;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return AccordPermission
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
