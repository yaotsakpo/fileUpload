<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationCaisse
 *
 * @ORM\Table(name="operation_caisse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OperationCaisseRepository")
 */
class OperationCaisse
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
     * @ORM\Column(name="CodeProduit", type="string", length=255)
     */
    private $codeProduit;


    /**
     * @var string
     *
     * @ORM\Column(name="ModeDeComptabilisation", type="string", length=255)
     */
    private $modeDeComptabilisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="Classification", type="string", length=255)
     */
    private $classification;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeApporteur", type="string", length=255)
     */
    private $codeApporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Apporteur", type="string", length=255)
     */
    private $apporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroPolice", type="string", length=255)
     */
    private $numeroPolice;

    /**
     * @var string
     *
     * @ORM\Column(name="StatutPolice", type="string", length=255)
     */
    private $statutPolice;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroSouscripteur", type="string", length=255)
     */
    private $numeroSouscripteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Souscripteur", type="string", length=255)
     */
    private $souscripteur;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroAssure", type="string", length=255)
     */
    private $numeroAssure;

    /**
     * @var string
     *
     * @ORM\Column(name="Assure", type="string", length=255)
     */
    private $assure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissanceAssure", type="date")
     */
    private $dateNaissanceAssure;

    /**
     * @var string
     *
     * @ORM\Column(name="Compte", type="string", length=255)
     */
    private $compte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSouscription", type="date")
     */
    private $dateSouscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEffet", type="date")
     */
    private $dateEffet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEcheance", type="date")
     */
    private $dateEcheance;

    /**
     * @var string
     *
     * @ORM\Column(name="Accessoires", type="string", length=255)
     */
    private $accessoires;

    /**
     * @var string
     *
     * @ORM\Column(name="CoutSms", type="string", length=255)
     */
    private $coutSms;

    /**
     * @var int
     *
     * @ORM\Column(name="PrimeDC", type="integer")
     */
    private $primeDC;

    /**
     * @var int
     *
     * @ORM\Column(name="PrimeEpargne", type="integer")
     */
    private $primeEpargne;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodicite", type="string", length=255)
     */
    private $periodicite;

    /**
     * @var int
     *
     * @ORM\Column(name="Prime", type="integer")
     */
    private $prime;

    /**
     * @var string
     *
     * @ORM\Column(name="KDC", type="string", length=255)
     */
    private $kDC;

    /**
     * @var string
     *
     * @ORM\Column(name="KTerme", type="string", length=255)
     */
    private $kTerme;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatPolice", type="string", length=255)
     */
    private $etatPolice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSort", type="date")
     */
    private $dateSort;

    /**
     * @var int
     *
     * @ORM\Column(name="PMActuelle", type="integer")
     */
    private $pMActuelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeLaPM", type="date")
     */
    private $dateDeLaPM;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeDeReglement", type="string", length=255)
     */
    private $typeDeReglement;

    /**
     * @var string
     *
     * @ORM\Column(name="ModeDePaiement", type="string", length=255)
     */
    private $modeDePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="SourceDeBordereau", type="string", length=255)
     */
    private $sourceDeBordereau;

    /**
     * @var string
     *
     * @ORM\Column(name="BanqueDeRemise", type="string", length=255)
     */
    private $banqueDeRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="ReferenceRegt", type="string", length=255)
     */
    private $referenceRegt;

    /**
     * @var int
     *
     * @ORM\Column(name="NCLE",  type="integer")
     */
    private $nCLE;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeReglement", type="date")
     */
    private $dateDeReglement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeSaisie", type="date")
     */
    private $dateDeSaisie;

    /**
     * @var string
     *
     * @ORM\Column(name="UtilisateurAyantSaisie", type="string", length=255)
     */
    private $utilisateurAyantSaisie;

    /**
     * @var int
     *
     * @ORM\Column(name="MtReglement", type="integer")
     */
    private $mtReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="MtReglementHt", type="integer")
     */
    private $mtReglementHt;

    /**
     * @var string
     *
     * @ORM\Column(name="CoutDePolice", type="string", length=255)
     */
    private $coutDePolice;

    /**
     * @var string
     *
     * @ORM\Column(name="Taxe", type="string", length=255)
     */
    private $taxe;

    /**
     * @var int
     *
     * @ORM\Column(name="NetAPayer", type="integer")
     */
    private $netAPayer;

    /**
     * @var string
     *
     * @ORM\Column(name="Utilisateur", type="string", length=255)
     */
    private $utilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeValidation", type="date")
     */
    private $dateDeValidation;

    /**
     * @var string
     *
     * @ORM\Column(name="BeneficiaireEnCasDeDeces", type="string", length=255)
     */
    private $beneficiaireEnCasDeDeces;


     /**
     *
     * @var Produit $produit
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Produit",inversedBy="operations",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $produit;


     /**
     *
     * @var TypeOperation $typeOperation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeOperation",inversedBy="operations",cascade={"all"})
     *
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */


    Private $typeOperation;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateUpload", type="date")
     */
    private $dateUpload;


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
     * Set codeProduit
     *
     * @param string $codeProduit
     *
     * @return OperationCaisse
     */
    public function setCodeProduit($codeProduit)
    {
        $this->codeProduit = $codeProduit;

        return $this;
    }

    /**
     * Get codeProduit
     *
     * @return string
     */
    public function getCodeProduit()
    {
        return $this->codeProduit;
    }


    /**
     * Set modeDeComptabilisation
     *
     * @param string $modeDeComptabilisation
     *
     * @return OperationCaisse
     */
    public function setModeDeComptabilisation($modeDeComptabilisation)
    {
        $this->modeDeComptabilisation = $modeDeComptabilisation;

        return $this;
    }

    /**
     * Get modeDeComptabilisation
     *
     * @return string
     */
    public function getModeDeComptabilisation()
    {
        return $this->modeDeComptabilisation;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return OperationCaisse
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set classification
     *
     * @param string $classification
     *
     * @return OperationCaisse
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set codeApporteur
     *
     * @param string $codeApporteur
     *
     * @return OperationCaisse
     */
    public function setCodeApporteur($codeApporteur)
    {
        $this->codeApporteur = $codeApporteur;

        return $this;
    }

    /**
     * Get codeApporteur
     *
     * @return string
     */
    public function getCodeApporteur()
    {
        return $this->codeApporteur;
    }

    /**
     * Set apporteur
     *
     * @param string $apporteur
     *
     * @return OperationCaisse
     */
    public function setApporteur($apporteur)
    {
        $this->apporteur = $apporteur;

        return $this;
    }

    /**
     * Get apporteur
     *
     * @return string
     */
    public function getApporteur()
    {
        return $this->apporteur;
    }

    /**
     * Set numeroPolice
     *
     * @param string $numeroPolice
     *
     * @return OperationCaisse
     */
    public function setNumeroPolice($numeroPolice)
    {
        $this->numeroPolice = $numeroPolice;

        return $this;
    }

    /**
     * Get numeroPolice
     *
     * @return string
     */
    public function getNumeroPolice()
    {
        return $this->numeroPolice;
    }

    /**
     * Set statutPolice
     *
     * @param string $statutPolice
     *
     * @return OperationCaisse
     */
    public function setStatutPolice($statutPolice)
    {
        $this->statutPolice = $statutPolice;

        return $this;
    }

    /**
     * Get statutPolice
     *
     * @return string
     */
    public function getStatutPolice()
    {
        return $this->statutPolice;
    }

    /**
     * Set numeroSouscripteur
     *
     * @param string $numeroSouscripteur
     *
     * @return OperationCaisse
     */
    public function setNumeroSouscripteur($numeroSouscripteur)
    {
        $this->numeroSouscripteur = $numeroSouscripteur;

        return $this;
    }

    /**
     * Get numeroSouscripteur
     *
     * @return string
     */
    public function getNumeroSouscripteur()
    {
        return $this->numeroSouscripteur;
    }

    /**
     * Set souscripteur
     *
     * @param string $souscripteur
     *
     * @return OperationCaisse
     */
    public function setSouscripteur($souscripteur)
    {
        $this->souscripteur = $souscripteur;

        return $this;
    }

    /**
     * Get souscripteur
     *
     * @return string
     */
    public function getSouscripteur()
    {
        return $this->souscripteur;
    }

    /**
     * Set numeroAssure
     *
     * @param string $numeroAssure
     *
     * @return OperationCaisse
     */
    public function setNumeroAssure($numeroAssure)
    {
        $this->numeroAssure = $numeroAssure;

        return $this;
    }

    /**
     * Get numeroAssure
     *
     * @return string
     */
    public function getNumeroAssure()
    {
        return $this->numeroAssure;
    }

    /**
     * Set assure
     *
     * @param string $assure
     *
     * @return OperationCaisse
     */
    public function setAssure($assure)
    {
        $this->assure = $assure;

        return $this;
    }

    /**
     * Get assure
     *
     * @return string
     */
    public function getAssure()
    {
        return $this->assure;
    }

    /**
     * Set dateNaissanceAssure
     *
     * @param \DateTime $dateNaissanceAssure
     *
     * @return OperationCaisse
     */
    public function setDateNaissanceAssure($dateNaissanceAssure)
    {
        $this->dateNaissanceAssure = $dateNaissanceAssure;

        return $this;
    }

    /**
     * Get dateNaissanceAssure
     *
     * @return \DateTime
     */
    public function getDateNaissanceAssure()
    {
        return $this->dateNaissanceAssure;
    }

    /**
     * Set compte
     *
     * @param string $compte
     *
     * @return OperationCaisse
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return string
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set dateSouscription
     *
     * @param \DateTime $dateSouscription
     *
     * @return OperationCaisse
     */
    public function setDateSouscription($dateSouscription)
    {
        $this->dateSouscription = $dateSouscription;

        return $this;
    }

    /**
     * Get dateSouscription
     *
     * @return \DateTime
     */
    public function getDateSouscription()
    {
        return $this->dateSouscription;
    }

    /**
     * Set dateEffet
     *
     * @param \DateTime $dateEffet
     *
     * @return OperationCaisse
     */
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * Get dateEffet
     *
     * @return \DateTime
     */
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    

    /**
     * Set accessoires
     *
     * @param string $accessoires
     *
     * @return OperationCaisse
     */
    public function setAccessoires($accessoires)
    {
        $this->accessoires = $accessoires;

        return $this;
    }

    /**
     * Get accessoires
     *
     * @return string
     */
    public function getAccessoires()
    {
        return $this->accessoires;
    }

    /**
     * Set coutSms
     *
     * @param string $coutSms
     *
     * @return OperationCaisse
     */
    public function setCoutSms($coutSms)
    {
        $this->coutSms = $coutSms;

        return $this;
    }

    /**
     * Get coutSms
     *
     * @return string
     */
    public function getCoutSms()
    {
        return $this->coutSms;
    }

    /**
     * Set primeDC
     *
     * @param integer $primeDC
     *
     * @return OperationCaisse
     */
    public function setPrimeDC($primeDC)
    {
        $this->primeDC = $primeDC;

        return $this;
    }

    /**
     * Get primeDC
     *
     * @return int
     */
    public function getPrimeDC()
    {
        return $this->primeDC;
    }

    /**
     * Set primeEpargne
     *
     * @param integer $primeEpargne
     *
     * @return OperationCaisse
     */
    public function setPrimeEpargne($primeEpargne)
    {
        $this->primeEpargne = $primeEpargne;

        return $this;
    }

    /**
     * Get primeEpargne
     *
     * @return int
     */
    public function getPrimeEpargne()
    {
        return $this->primeEpargne;
    }

    /**
     * Set periodicite
     *
     * @param string $periodicite
     *
     * @return OperationCaisse
     */
    public function setPeriodicite($periodicite)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return string
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }

    /**
     * Set prime
     *
     * @param integer $prime
     *
     * @return OperationCaisse
     */
    public function setPrime($prime)
    {
        $this->prime = $prime;

        return $this;
    }

    /**
     * Get prime
     *
     * @return int
     */
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * Set kDC
     *
     * @param string $kDC
     *
     * @return OperationCaisse
     */
    public function setKDC($kDC)
    {
        $this->kDC = $kDC;

        return $this;
    }

    /**
     * Get kDC
     *
     * @return string
     */
    public function getKDC()
    {
        return $this->kDC;
    }

    /**
     * Set kTerme
     *
     * @param string $kTerme
     *
     * @return OperationCaisse
     */
    public function setKTerme($kTerme)
    {
        $this->kTerme = $kTerme;

        return $this;
    }

    /**
     * Get kTerme
     *
     * @return string
     */
    public function getKTerme()
    {
        return $this->kTerme;
    }

    /**
     * Set etatPolice
     *
     * @param string $etatPolice
     *
     * @return OperationCaisse
     */
    public function setEtatPolice($etatPolice)
    {
        $this->etatPolice = $etatPolice;

        return $this;
    }

    /**
     * Get etatPolice
     *
     * @return string
     */
    public function getEtatPolice()
    {
        return $this->etatPolice;
    }

    /**
     * Set dateSort
     *
     * @param \DateTime $dateSort
     *
     * @return OperationCaisse
     */
    public function setDateSort($dateSort)
    {
        $this->dateSort = $dateSort;

        return $this;
    }

    /**
     * Get dateSort
     *
     * @return \DateTime
     */
    public function getDateSort()
    {
        return $this->dateSort;
    }

    /**
     * Set pMActuelle
     *
     * @param integer $pMActuelle
     *
     * @return OperationCaisse
     */
    public function setPMActuelle($pMActuelle)
    {
        $this->pMActuelle = $pMActuelle;

        return $this;
    }

    /**
     * Get pMActuelle
     *
     * @return int
     */
    public function getPMActuelle()
    {
        return $this->pMActuelle;
    }

    /**
     * Set dateDeLaPM
     *
     * @param \DateTime $dateDeLaPM
     *
     * @return OperationCaisse
     */
    public function setDateDeLaPM($dateDeLaPM)
    {
        $this->dateDeLaPM = $dateDeLaPM;

        return $this;
    }

    /**
     * Get dateDeLaPM
     *
     * @return \DateTime
     */
    public function getDateDeLaPM()
    {
        return $this->dateDeLaPM;
    }

    /**
     * Set typeDeReglement
     *
     * @param string $typeDeReglement
     *
     * @return OperationCaisse
     */
    public function setTypeDeReglement($typeDeReglement)
    {
        $this->typeDeReglement = $typeDeReglement;

        return $this;
    }

    /**
     * Get typeDeReglement
     *
     * @return string
     */
    public function getTypeDeReglement()
    {
        return $this->typeDeReglement;
    }

    /**
     * Set modeDePaiement
     *
     * @param string $modeDePaiement
     *
     * @return OperationCaisse
     */
    public function setModeDePaiement($modeDePaiement)
    {
        $this->modeDePaiement = $modeDePaiement;

        return $this;
    }

    /**
     * Get modeDePaiement
     *
     * @return string
     */
    public function getModeDePaiement()
    {
        return $this->modeDePaiement;
    }

    /**
     * Set sourceDeBordereau
     *
     * @param string $sourceDeBordereau
     *
     * @return OperationCaisse
     */
    public function setSourceDeBordereau($sourceDeBordereau)
    {
        $this->sourceDeBordereau = $sourceDeBordereau;

        return $this;
    }

    /**
     * Get sourceDeBordereau
     *
     * @return string
     */
    public function getSourceDeBordereau()
    {
        return $this->sourceDeBordereau;
    }

    /**
     * Set banqueDeRemise
     *
     * @param string $banqueDeRemise
     *
     * @return OperationCaisse
     */
    public function setBanqueDeRemise($banqueDeRemise)
    {
        $this->banqueDeRemise = $banqueDeRemise;

        return $this;
    }

    /**
     * Get banqueDeRemise
     *
     * @return string
     */
    public function getBanqueDeRemise()
    {
        return $this->banqueDeRemise;
    }

    /**
     * Set referenceRegt
     *
     * @param string $referenceRegt
     *
     * @return OperationCaisse
     */
    public function setReferenceRegt($referenceRegt)
    {
        $this->referenceRegt = $referenceRegt;

        return $this;
    }

    /**
     * Get referenceRegt
     *
     * @return string
     */
    public function getReferenceRegt()
    {
        return $this->referenceRegt;
    }

    

    /**
     * Set dateDeReglement
     *
     * @param \DateTime $dateDeReglement
     *
     * @return OperationCaisse
     */
    public function setDateDeReglement($dateDeReglement)
    {
        $this->dateDeReglement = $dateDeReglement;

        return $this;
    }

    /**
     * Get dateDeReglement
     *
     * @return \DateTime
     */
    public function getDateDeReglement()
    {
        return $this->dateDeReglement;
    }

    /**
     * Set dateDeSaisie
     *
     * @param \DateTime $dateDeSaisie
     *
     * @return OperationCaisse
     */
    public function setDateDeSaisie($dateDeSaisie)
    {
        $this->dateDeSaisie = $dateDeSaisie;

        return $this;
    }

    /**
     * Get dateDeSaisie
     *
     * @return \DateTime
     */
    public function getDateDeSaisie()
    {
        return $this->dateDeSaisie;
    }

    /**
     * Set utilisateurAyantSaisie
     *
     * @param string $utilisateurAyantSaisie
     *
     * @return OperationCaisse
     */
    public function setUtilisateurAyantSaisie($utilisateurAyantSaisie)
    {
        $this->utilisateurAyantSaisie = $utilisateurAyantSaisie;

        return $this;
    }

    /**
     * Get utilisateurAyantSaisie
     *
     * @return string
     */
    public function getUtilisateurAyantSaisie()
    {
        return $this->utilisateurAyantSaisie;
    }

    /**
     * Set mtReglement
     *
     * @param integer $mtReglement
     *
     * @return OperationCaisse
     */
    public function setMtReglement($mtReglement)
    {
        $this->mtReglement = $mtReglement;

        return $this;
    }

    /**
     * Get mtReglement
     *
     * @return int
     */
    public function getMtReglement()
    {
        return $this->mtReglement;
    }

    /**
     * Set mtReglementHt
     *
     * @param integer $mtReglementHt
     *
     * @return OperationCaisse
     */
    public function setMtReglementHt($mtReglementHt)
    {
        $this->mtReglementHt = $mtReglementHt;

        return $this;
    }

    /**
     * Get mtReglementHt
     *
     * @return int
     */
    public function getMtReglementHt()
    {
        return $this->mtReglementHt;
    }

    /**
     * Set coutDePolice
     *
     * @param string $coutDePolice
     *
     * @return OperationCaisse
     */
    public function setCoutDePolice($coutDePolice)
    {
        $this->coutDePolice = $coutDePolice;

        return $this;
    }

    /**
     * Get coutDePolice
     *
     * @return string
     */
    public function getCoutDePolice()
    {
        return $this->coutDePolice;
    }

    /**
     * Set taxe
     *
     * @param string $taxe
     *
     * @return OperationCaisse
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;

        return $this;
    }

    /**
     * Get taxe
     *
     * @return string
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * Set netAPayer
     *
     * @param integer $netAPayer
     *
     * @return OperationCaisse
     */
    public function setNetAPayer($netAPayer)
    {
        $this->netAPayer = $netAPayer;

        return $this;
    }

    /**
     * Get netAPayer
     *
     * @return int
     */
    public function getNetAPayer()
    {
        return $this->netAPayer;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     *
     * @return OperationCaisse
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set dateDeValidation
     *
     * @param \DateTime $dateDeValidation
     *
     * @return OperationCaisse
     */
    public function setDateDeValidation($dateDeValidation)
    {
        $this->dateDeValidation = $dateDeValidation;

        return $this;
    }

    /**
     * Get dateDeValidation
     *
     * @return \DateTime
     */
    public function getDateDeValidation()
    {
        return $this->dateDeValidation;
    }

    /**
     * Set beneficiaireEnCasDeDeces
     *
     * @param string $beneficiaireEnCasDeDeces
     *
     * @return OperationCaisse
     */
    public function setBeneficiaireEnCasDeDeces($beneficiaireEnCasDeDeces)
    {
        $this->beneficiaireEnCasDeDeces = $beneficiaireEnCasDeDeces;

        return $this;
    }

    /**
     * Get beneficiaireEnCasDeDeces
     *
     * @return string
     */
    public function getBeneficiaireEnCasDeDeces()
    {
        return $this->beneficiaireEnCasDeDeces;
    }

    /**
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * @param \DateTime $dateEcheance
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;
    }

    /**
     * @return int
     */
    public function getNCLE()
    {
        return $this->nCLE;
    }

    /**
     * @param int $nCLE
     */
    public function setNCLE($nCLE)
    {
        $this->nCLE = $nCLE;
    }


    /**
     * @return Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param Produit $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return TypeOperation
     */
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * @param TypeOperation $typeOperation
     */
    public function setTypeOperation($typeOperation)
    {
        $this->typeOperation = $typeOperation;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }

    /**
     * @param \DateTime $dateUpload
     */
    public function setDateUpload($dateUpload)
    {
        $this->dateUpload = $dateUpload;
    }



}

