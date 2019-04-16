<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importation
 *
 * @ORM\Table(name="importation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImportationRepository")
 */
class Importation
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
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

   /**
     * @var \DateTime
     *
     * @ORM\Column(name="mois", type="date")
     */
    private $mois;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee", type="date")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\OperationCaisse",mappedBy="importation",cascade={"remove"})
     */

    private $operations;


    /**
     *
     * @var TypeOperation $typeOperation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeOperation",inversedBy="importations",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $typeOperation;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Journal",mappedBy="importation",cascade={"remove"})
     */

    private $journals;




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
        $this->journals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Importation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set mois
     *
     * @param \DateTime $mois
     *
     * @return Importation
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return \DateTime
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return Importation
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Importation
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Importation
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

    /**
     * Add operation
     *
     * @param \AppBundle\Entity\OperationCaisse $operation
     *
     * @return Importation
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

    /**
     * Set typeOperation
     *
     * @param \AppBundle\Entity\TypeOperation $typeOperation
     *
     * @return Importation
     */
    public function setTypeOperation(\AppBundle\Entity\TypeOperation $typeOperation = null)
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }

    /**
     * Get typeOperation
     *
     * @return \AppBundle\Entity\TypeOperation
     */
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * Add journal
     *
     * @param \AppBundle\Entity\Journal $journal
     *
     * @return Importation
     */
    public function addJournal(\AppBundle\Entity\Journal $journal)
    {
        $this->journals[] = $journal;

        return $this;
    }

    /**
     * Remove journal
     *
     * @param \AppBundle\Entity\Journal $journal
     */
    public function removeJournal(\AppBundle\Entity\Journal $journal)
    {
        $this->journals->removeElement($journal);
    }

    /**
     * Get journals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJournals()
    {
        return $this->journals;
    }
}
