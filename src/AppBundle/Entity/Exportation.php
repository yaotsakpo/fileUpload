<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exportation
 *
 * @ORM\Table(name="exportation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExportationRepository")
 */
class Exportation
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
     * @ORM\Column(name="jourExportation", type="datetime", nullable=true)
     */
    private $jourExportation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jourJournal", type="datetime", nullable=true)
     */
    private $jourJournal;

    /**
     * @var string
     *
     * @ORM\Column(name="numPiece", type="string", length=255, nullable=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="numFacture", type="string", length=255, nullable=true)
     */
    private $numFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="numCompteGeneral", type="string", length=255, nullable=true)
     */
    private $numCompteGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="numCompteTiers", type="string", length=255, nullable=true)
     */
    private $numCompteTiers;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleEcriture", type="string", length=255, nullable=true)
     */
    private $libelleEcriture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEcheance", type="datetime", nullable=true)
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="positionJournal", type="string", length=255, nullable=true)
     */
    private $positionJournal;

    /**
     * @var int
     *
     * @ORM\Column(name="montantDebit", type="integer", nullable=true)
     */
    private $montantDebit;

    /**
     * @var int
     *
     * @ORM\Column(name="montantCredit", type="integer", nullable=true)
     */
    private $montantCredit;



    /**
    * @ORM\ManyToOne(targetEntity=Journal::class, cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=true,unique=false) 
    */
    private $journal;
    

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
     * Set jourJournal
     *
     * @param \DateTime $jourJournal
     *
     * @return Exportation
     */
    public function setJourJournal($jourJournal)
    {
        $this->jourJournal = $jourJournal;

        return $this;
    }

    /**
     * Get jourJournal
     *
     * @return \DateTime
     */
    public function getJourJournal()
    {
        return $this->jourJournal;
    }

    /**
     * Set numPiece
     *
     * @param string $numPiece
     *
     * @return Exportation
     */
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get numPiece
     *
     * @return string
     */
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set numFacture
     *
     * @param string $numFacture
     *
     * @return Exportation
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * Get numFacture
     *
     * @return string
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Exportation
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set numCompteGeneral
     *
     * @param string $numCompteGeneral
     *
     * @return Exportation
     */
    public function setNumCompteGeneral($numCompteGeneral)
    {
        $this->numCompteGeneral = $numCompteGeneral;

        return $this;
    }

    /**
     * Get numCompteGeneral
     *
     * @return string
     */
    public function getNumCompteGeneral()
    {
        return $this->numCompteGeneral;
    }

    /**
     * Set numCompteTiers
     *
     * @param string $numCompteTiers
     *
     * @return Exportation
     */
    public function setNumCompteTiers($numCompteTiers)
    {
        $this->numCompteTiers = $numCompteTiers;

        return $this;
    }

    /**
     * Get numCompteTiers
     *
     * @return string
     */
    public function getNumCompteTiers()
    {
        return $this->numCompteTiers;
    }

    /**
     * Set libelleEcriture
     *
     * @param string $libelleEcriture
     *
     * @return Exportation
     */
    public function setLibelleEcriture($libelleEcriture)
    {
        $this->libelleEcriture = $libelleEcriture;

        return $this;
    }

    /**
     * Get libelleEcriture
     *
     * @return string
     */
    public function getLibelleEcriture()
    {
        return $this->libelleEcriture;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Exportation
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set positionJournal
     *
     * @param string $positionJournal
     *
     * @return Exportation
     */
    public function setPositionJournal($positionJournal)
    {
        $this->positionJournal = $positionJournal;

        return $this;
    }

    /**
     * Get positionJournal
     *
     * @return string
     */
    public function getPositionJournal()
    {
        return $this->positionJournal;
    }

    /**
     * Set montantDebit
     *
     * @param integer $montantDebit
     *
     * @return Exportation
     */
    public function setMontantDebit($montantDebit)
    {
        $this->montantDebit = $montantDebit;

        return $this;
    }

    /**
     * Get montantDebit
     *
     * @return int
     */
    public function getMontantDebit()
    {
        return $this->montantDebit;
    }

    /**
     * Set montantCredit
     *
     * @param integer $montantCredit
     *
     * @return Exportation
     */
    public function setMontantCredit($montantCredit)
    {
        $this->montantCredit = $montantCredit;

        return $this;
    }

    /**
     * Get montantCredit
     *
     * @return int
     */
    public function getMontantCredit()
    {
        return $this->montantCredit;
    }

    /**
     * Set jourExportation
     *
     * @param \DateTime $jourExportation
     *
     * @return Exportation
     */
    public function setJourExportation($jourExportation)
    {
        $this->jourExportation = $jourExportation;

        return $this;
    }

    /**
     * Get jourExportation
     *
     * @return \DateTime
     */
    public function getJourExportation()
    {
        return $this->jourExportation;
    }



    /**
     * Set journal
     *
     * @param \AppBundle\Entity\Journal $journal
     *
     * @return Exportation
     */
    public function setJournal(\AppBundle\Entity\Journal $journal = null)
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
}
