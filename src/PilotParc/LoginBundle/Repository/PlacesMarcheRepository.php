<?php

namespace PilotParc\LoginBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PlacesMarcheRepository extends EntityRepository
{
    public function test()
    {
        return $this->getEntityManager()
        ->createQuery('SELECT tbp FROM PilotParcLoginBundle:TbplacesMarche tbp')
        ->getResult();
    }

    public function testps()
    {
    	return $this->getEntityManager()
        ->getConnection()
    	->query('CALL psAfficherMarcheJour (2)')
    	->fetchAll();
        
       
    }

    public function testsql()
    {
        $rawSql = "SELECT * FROM TButilisateurs WHERE prenom = 'Jimmy' ";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);

        return $stmt->fetchAll();

    }
}