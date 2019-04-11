<?php

namespace AppBundle\Repository;

/**
 * OperationCaisseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OperationCaisseRepository extends \Doctrine\ORM\EntityRepository
{
	public function getStat()
    {
        $query="
        SELECT o.dateDeReglement as dateReglement ,SUM(o.prime) as prime,t.numCptDebit as numeroCompteDebit
        FROM AppBundle:OperationCaisse o
        JOIN AppBundle:TypeOperation t
        WHERE o.typeOperation= t.id
        GROUP BY o.dateDeReglement ";
        return $this->getEntityManager()->createQuery($query)->getResult();
    }

}
