<?php

namespace AppBundle\Service;

use AppBundle\Entity\OperationCaisse;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CreationOperationCaisse
{
    private $em;

    public function __construct(EntityManager $em)  {
        $this->em = $em;
    }

    public function hydratation($ligne,$typeOperation)
    {
        
        $repository = $this->em->getRepository('AppBundle:Produit');
        $produit= $repository->findOneBy(['nomProduit'=>$ligne[1]]);

        $repository = $this->em->getRepository('AppBundle:TypeOperation');
        $type= $repository->findOneBy(['id'=>$typeOperation]);

            if(!empty($produit)){
            $operation= new OperationCaisse();
            $operation->setDateUpload(new \DateTime('now'));
            $operation->setCodeProduit($ligne[0]);
            $operation->setTypeOperation($type);
            $operation->setProduit($produit);
            $operation->setModeDeComptabilisation($ligne[2]);
            $operation->setCategorie($ligne[3]);
            $operation->setClassification($ligne[4]);
            $operation->setCodeApporteur($ligne[5]);
            $operation->setApporteur($ligne[6]);
            $operation->setNumeroPolice($ligne[7]);
            $operation->setStatutPolice($ligne[8]);
            $operation->setNumeroSouscripteur($ligne[9]);
            $operation->setSouscripteur($ligne[10]);
            $operation->setNumeroAssure($ligne[11]);
            $operation->setAssure($ligne[12]);
            $operation->setDateNaissanceAssure(new \DateTime(str_replace('/','-',$ligne[13])));
            $operation->setCompte($ligne[14]);
            $operation->setDateSouscription(new \DateTime(str_replace('/','-',$ligne[15])));
            $operation->setDateEffet(new \DateTime(str_replace('/','-',$ligne[16])));
            $operation->setDateEcheance(new \DateTime(str_replace('/','-',$ligne[17])));
            $operation->setAccessoires($ligne[18]);
            $operation->setCoutSms($ligne[19]);
            $operation->setPrimeDC($ligne[20]);
            $operation->setPrimeEpargne($ligne[21]);
            $operation->setPeriodicite($ligne[22]);
            $operation->setPrime($ligne[23]);
            $operation->setKDC($ligne[24]);
            $operation->setKTerme($ligne[25]);
            $operation->setEtatPolice($ligne[26]);
            $operation->setDateSort(new \DateTime(str_replace('/','-',$ligne[27])));
            $operation->setPMActuelle($ligne[28]);
            $operation->setDateDeLaPM(new \DateTime(str_replace('/','-',$ligne[29])));
            $operation->setTypeDeReglement($ligne[30]);
            $operation->setModeDePaiement($ligne[31]);
            $operation->setSourceDeBordereau($ligne[32]);
            $operation->setBanqueDeRemise($ligne[33]);
            $operation->setReferenceRegt($ligne[34]);
            $operation->setNCLE($ligne[35]);
            $operation->setDateDeReglement(new \DateTime(str_replace('/','-',$ligne[36])));
            $operation->setDateDeSaisie(new \DateTime(str_replace('/','-',$ligne[37])));
            $operation->setUtilisateurAyantSaisie($ligne[38]);
            $operation->setMtReglement($ligne[39]);
            $operation->setMtReglementHt($ligne[40]);
            $operation->setCoutDePolice($ligne[41]);
            $operation->setTaxe($ligne[42]);
            $operation->setNetAPayer($ligne[43]);
            $operation->setUtilisateur($ligne[44]);
            $operation->setDateDeValidation(new \DateTime(str_replace('/','-',$ligne[45])));
            $operation->setBeneficiaireEnCasDeDeces($ligne[46]);
            $this->em->persist($operation);
            }
    }

}
