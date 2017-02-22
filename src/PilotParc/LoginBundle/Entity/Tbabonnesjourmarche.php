<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbabonnesjourmarche
 */
class Tbabonnesjourmarche
{
    /**
     * @var integer
     */
    private $idplacemarche;

    /**
     * @var integer
     */
    private $idmarche;

    /**
     * @var integer
     */
    private $idmarchand;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var integer
     */
    private $idtbabonnesjourmarche;


    /**
     * Set idplacemarche
     *
     * @param integer $idplacemarche
     * @return Tbabonnesjourmarche
     */
    public function setIdplacemarche($idplacemarche)
    {
        $this->idplacemarche = $idplacemarche;

        return $this;
    }

    /**
     * Get idplacemarche
     *
     * @return integer 
     */
    public function getIdplacemarche()
    {
        return $this->idplacemarche;
    }

    /**
     * Set idmarche
     *
     * @param integer $idmarche
     * @return Tbabonnesjourmarche
     */
    public function setIdmarche($idmarche)
    {
        $this->idmarche = $idmarche;

        return $this;
    }

    /**
     * Get idmarche
     *
     * @return integer 
     */
    public function getIdmarche()
    {
        return $this->idmarche;
    }

    /**
     * Set idmarchand
     *
     * @param integer $idmarchand
     * @return Tbabonnesjourmarche
     */
    public function setIdmarchand($idmarchand)
    {
        $this->idmarchand = $idmarchand;

        return $this;
    }

    /**
     * Get idmarchand
     *
     * @return integer 
     */
    public function getIdmarchand()
    {
        return $this->idmarchand;
    }

    /**
     * Set jour
     *
     * @param string $jour
     * @return Tbabonnesjourmarche
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Get idtbabonnesjourmarche
     *
     * @return integer 
     */
    public function getIdtbabonnesjourmarche()
    {
        return $this->idtbabonnesjourmarche;
    }
}
