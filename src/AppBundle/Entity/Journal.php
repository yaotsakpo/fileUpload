<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JournalRepository")
 */
class Journal
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
     * @ORM\Column(name="jour", type="date")
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="numPiece", type="string", length=255,nullable=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="numFacture", type="string", length=255,nullable=true)
     */
    private $numFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255,nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="numCompteGeneral", type="string", length=255,nullable=true)
     */
    private $numCompteGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="numComptTiers", type="string", length=255,nullable=true)
     */
    private $numComptTiers;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleEcriture", type="string", length=255)
     */
    private $libelleEcriture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEcheance", type="date",nullable=true)
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="positionJournal", type="string", length=255,nullable=true)
     */
    private $positionJournal;

    /**
     * @var int
     *
     * @ORM\Column(name="montantDebit", type="integer",nullable=true)
     */
    private $montantDebit;

    /**
     * @var int
     *
     * @ORM\Column(name="montantCredit", type="integer",nullable=true)
     */
    private $montantCredit;



    /**
     *
     * @var Importation $importation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Importation",inversedBy="journals",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE",unique=false)
     */

    Private $importation;


    /**                                     
    * @ORM\OneToOne(targetEntity="Journal", mappedBy="cumul")                                     
    */                                     
    private $detailsCumul;   


    /**                               
    * @ORM\ManyToOne(targetEntity="Journal", inversedBy="detailsCumul",cascade={"all"})                                     
    * @ORM\JoinColumn(name="cumul", referencedColumnName="id",nullable=true,unique=false)                                     
    */                                     
    private $cumul;


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
     * Set jour
     *
     * @param \DateTime $jour
     *
     * @return Journal
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set numPiece
     *
     * @param string $numPiece
     *
     * @return Journal
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
     * @return Journal
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
     * @return Journal
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
     * @return Journal
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
     * Set numComptTiers
     *
     * @param string $numComptTiers
     *
     * @return Journal
     */
    public function setNumComptTiers($numComptTiers)
    {
        $this->numComptTiers = $numComptTiers;

        return $this;
    }

    /**
     * Get numComptTiers
     *
     * @return string
     */
    public function getNumComptTiers()
    {
        return $this->numComptTiers;
    }

    /**
     * Set libelleEcriture
     *
     * @param string $libelleEcriture
     *
     * @return Journal
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
     * @return Journal
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
     * @return Journal
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
     * @return Journal
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
     * @return Journal
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
     * Set operationCaisse
     *
     * @param \AppBundle\Entity\OperationCaisse $operationCaisse
     *
     * @return Journal
     */
    public function setOperationCaisse(\AppBundle\Entity\OperationCaisse $operationCaisse = null)
    {
        $this->operationCaisse = $operationCaisse;

        return $this;
    }



    /**
     * Get operationCaisse
     *
     * @return \AppBundle\Entity\OperationCaisse
     */
    public function getOperationCaisse()
    {
        return $this->operationCaisse;
    }

    /**
     * Set detailsCumul
     *
     * @param \AppBundle\Entity\Journal $detailsCumul
     *
     * @return Journal
     */
    public function setDetailsCumul(\AppBundle\Entity\Journal $detailsCumul = null)
    {
        $this->detailsCumul = $detailsCumul;

        return $this;
    }

    /**
     * Get detailsCumul
     *
     * @return \AppBundle\Entity\Journal
     */
    public function getDetailsCumul()
    {
        return $this->detailsCumul;
    }

    /**
     * Set cumul
     *
     * @param \AppBundle\Entity\Journal $cumul
     *
     * @return Journal
     */
    public function setCumul(\AppBundle\Entity\Journal $cumul = null)
    {
        $this->cumul = $cumul;

        return $this;
    }

    /**
     * Get cumul
     *
     * @return \AppBundle\Entity\Journal
     */
    public function getCumul()
    {
        return $this->cumul;
    }

    /**
     * Set importation
     *
     * @param \AppBundle\Entity\Importation $importation
     *
     * @return Journal
     */
    public function setImportation(\AppBundle\Entity\Importation $importation = null)
    {
        $this->importation = $importation;

        return $this;
    }

    /**
     * Get importation
     *
     * @return \AppBundle\Entity\Importation
     */
    public function getImportation()
    {
        return $this->importation;
    }
}
