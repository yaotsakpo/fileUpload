<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @var ArrayCollection demandePermissions
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DemandePermission",mappedBy="demandeur",cascade={"remove"})
     */

    private $demandePermissions;


    /**
     * @var ArrayCollection accordsPermissions
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\AccordPermission",mappedBy="accordeur",cascade={"remove"})
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
     * Add demandePermission
     *
     * @param \AppBundle\Entity\DemandePermission $demandePermission
     *
     * @return User
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

    /**
     * Add accordsPermission
     *
     * @param \AppBundle\Entity\AccordPermission $accordsPermission
     *
     * @return User
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
}
