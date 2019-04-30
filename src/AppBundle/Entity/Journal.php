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
     * @ORM\Column(name="jour", type="datetime")
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
     *
     * @var CompteCompta $numCompte
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CompteCompta",inversedBy="journals",cascade={"persist"})
     *
     * @ORM\JoinColumn(nullable=true,unique=false)
     */

    Private $numCompte;


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
     * @ORM\Column(name="montant", type="integer",nullable=true)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="dispatch", type="integer",nullable=true)
     */
    private $dispatch;


    /**
     * @var int
     *
     * @ORM\Column(name="isDebit", type="integer",nullable=true)
     */
    private $isDebit;


    /**
     * @var int
     *
     * @ORM\Column(name="suppression", type="integer",nullable=true)
     */
    private $suppression;


    /**
     * @var int
     *
     * @ORM\Column(name="codeOperation",type="string", length=255,nullable=true)
     */
    private $codeOperation;


    /**
     *
     * @var Importation $importation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Importation",inversedBy="journals",cascade={"persist"})
     *
     * @ORM\JoinColumn(nullable=true,unique=false)
     */

    Private $importation;


    /**                                     
    * @ORM\OneToMany(targetEntity="Journal", mappedBy="cumul",cascade={"persist"})                                     
    */                                     
    private $detailsCumul;   


    /**                               
    * @ORM\ManyToOne(targetEntity="Journal", inversedBy="detailsCumul")                                
    * @ORM\JoinColumn(name="cumul", referencedColumnName="id",nullable=true,unique=false,onDelete="SET NULL")                                     
    */                                     
    private $cumul;


    /**
     * @var ArrayCollection demandePermissions
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DemandePermission",mappedBy="journal",cascade={"remove"})
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
     * Constructor
     */
    public function __construct()
    {
        $this->detailsCumul = new \Doctrine\Common\Collections\ArrayCollection();
        $this->demandePermissions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set montant
     *
     * @param integer $montant
     *
     * @return Journal
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set dispatch
     *
     * @param integer $dispatch
     *
     * @return Journal
     */
    public function setDispatch($dispatch)
    {
        $this->dispatch = $dispatch;

        return $this;
    }

    /**
     * Get dispatch
     *
     * @return integer
     */
    public function getDispatch()
    {
        return $this->dispatch;
    }

    /**
     * Set isDebit
     *
     * @param integer $isDebit
     *
     * @return Journal
     */
    public function setIsDebit($isDebit)
    {
        $this->isDebit = $isDebit;

        return $this;
    }

    /**
     * Get isDebit
     *
     * @return integer
     */
    public function getIsDebit()
    {
        return $this->isDebit;
    }

    /**
     * Set suppression
     *
     * @param integer $suppression
     *
     * @return Journal
     */
    public function setSuppression($suppression)
    {
        $this->suppression = $suppression;

        return $this;
    }

    /**
     * Get suppression
     *
     * @return integer
     */
    public function getSuppression()
    {
        return $this->suppression;
    }

    /**
     * Set codeOperation
     *
     * @param string $codeOperation
     *
     * @return Journal
     */
    public function setCodeOperation($codeOperation)
    {
        $this->codeOperation = $codeOperation;

        return $this;
    }

    /**
     * Get codeOperation
     *
     * @return string
     */
    public function getCodeOperation()
    {
        return $this->codeOperation;
    }

    /**
     * Set numCompte
     *
     * @param \AppBundle\Entity\CompteCompta $numCompte
     *
     * @return Journal
     */
    public function setNumCompte(\AppBundle\Entity\CompteCompta $numCompte = null)
    {
        $this->numCompte = $numCompte;

        return $this;
    }

    /**
     * Get numCompte
     *
     * @return \AppBundle\Entity\CompteCompta
     */
    public function getNumCompte()
    {
        return $this->numCompte;
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

    /**
     * Add detailsCumul
     *
     * @param \AppBundle\Entity\Journal $detailsCumul
     *
     * @return Journal
     */
    public function addDetailsCumul(\AppBundle\Entity\Journal $detailsCumul)
    {
        $this->detailsCumul[] = $detailsCumul;

        return $this;
    }

    /**
     * Remove detailsCumul
     *
     * @param \AppBundle\Entity\Journal $detailsCumul
     */
    public function removeDetailsCumul(\AppBundle\Entity\Journal $detailsCumul)
    {
        $this->detailsCumul->removeElement($detailsCumul);
    }

    /**
     * Get detailsCumul
     *
     * @return \Doctrine\Common\Collections\Collection
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
     * Add demandePermission
     *
     * @param \AppBundle\Entity\DemandePermission $demandePermission
     *
     * @return Journal
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
