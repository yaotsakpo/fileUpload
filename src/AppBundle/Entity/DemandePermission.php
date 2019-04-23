<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandePermission
 *
 * @ORM\Table(name="demande_permission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DemandePermissionRepository")
 */
class DemandePermission
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="Etat", type="integer")
     */
    private $etat;


    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


   /**
     *
     * @var UserBundle\Entity\User $demandeur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User",inversedBy="demandePermissions")
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $demandeur;

       /**
     *
     * @var Journal $journal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Journal",inversedBy="demandePermissions")
     *
     * @ORM\JoinColumn(nullable=false)
     */

    private $journal;


    /**
     * @var ArrayCollection accordsPermissions
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\AccordPermission",mappedBy="demande",cascade={"remove"})
     */

    private $accordsPermissions;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DemandePermission
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return DemandePermission
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set demandeur
     *
     * @param \UserBundle\Entity\User $demandeur
     *
     * @return DemandePermission
     */
    public function setDemandeur(\UserBundle\Entity\User $demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return \UserBundle\Entity\User
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set journal
     *
     * @param \AppBundle\Entity\Journal $journal
     *
     * @return DemandePermission
     */
    public function setJournal(\AppBundle\Entity\Journal $journal)
    {
        $this->journal = $journal;

        return $this;
    }

    /**
     * Get journal
     *
     * @return \AppBundle\Entity\Journal
     */
    public function getJournal()
    {
        return $this->journal;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accordsPermissions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add accordsPermission
     *
     * @param \AppBundle\Entity\AccordPermission $accordsPermission
     *
     * @return DemandePermission
     */
    public function addAccordsPermission(\AppBundle\Entity\AccordPermission $accordsPermission)
    {
        $this->accordsPermissions[] = $accordsPermission;

        return $this;
    }

    /**
     * Remove accordsPermission
     *
     * @param \AppBundle\Entity\AccordPermission $accordsPermission
     */
    public function removeAccordsPermission(\AppBundle\Entity\AccordPermission $accordsPermission)
    {
        $this->accordsPermissions->removeElement($accordsPermission);
    }

    /**
     * Get accordsPermissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccordsPermissions()
    {
        return $this->accordsPermissions;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return DemandePermission
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
