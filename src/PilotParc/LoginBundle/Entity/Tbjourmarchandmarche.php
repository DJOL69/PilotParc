<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbjourmarchandmarche
 */
class Tbjourmarchandmarche
{
    /**
     * @var integer
     */
    private $tbIdtbmarche;

    /**
     * @var integer
     */
    private $tbIdtbmarchand;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \DateTime
     */
    private $datemaj;

    /**
     * @var integer
     */
    private $idtbjourmarchandmarche;


    /**
     * Set tbIdtbmarche
     *
     * @param integer $tbIdtbmarche
     * @return Tbjourmarchandmarche
     */
    public function setTbIdtbmarche($tbIdtbmarche)
    {
        $this->tbIdtbmarche = $tbIdtbmarche;

        return $this;
    }

    /**
     * Get tbIdtbmarche
     *
     * @return integer 
     */
    public function getTbIdtbmarche()
    {
        return $this->tbIdtbmarche;
    }

    /**
     * Set tbIdtbmarchand
     *
     * @param integer $tbIdtbmarchand
     * @return Tbjourmarchandmarche
     */
    public function setTbIdtbmarchand($tbIdtbmarchand)
    {
        $this->tbIdtbmarchand = $tbIdtbmarchand;

        return $this;
    }

    /**
     * Get tbIdtbmarchand
     *
     * @return integer 
     */
    public function getTbIdtbmarchand()
    {
        return $this->tbIdtbmarchand;
    }

    /**
     * Set jour
     *
     * @param string $jour
     * @return Tbjourmarchandmarche
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
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbjourmarchandmarche
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datemaj
     *
     * @param \DateTime $datemaj
     * @return Tbjourmarchandmarche
     */
    public function setDatemaj($datemaj)
    {
        $this->datemaj = $datemaj;

        return $this;
    }

    /**
     * Get datemaj
     *
     * @return \DateTime 
     */
    public function getDatemaj()
    {
        return $this->datemaj;
    }

    /**
     * Get idtbjourmarchandmarche
     *
     * @return integer 
     */
    public function getIdtbjourmarchandmarche()
    {
        return $this->idtbjourmarchandmarche;
    }
}
