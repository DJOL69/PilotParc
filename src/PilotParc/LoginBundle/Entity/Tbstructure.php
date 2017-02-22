<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbstructure
 */
class Tbstructure
{
    /**
     * @var string
     */
    private $libellestructure;

    /**
     * @var boolean
     */
    private $statutactivite;

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
    private $idtbstructure;


    /**
     * Set libellestructure
     *
     * @param string $libellestructure
     * @return Tbstructure
     */
    public function setLibellestructure($libellestructure)
    {
        $this->libellestructure = $libellestructure;

        return $this;
    }

    /**
     * Get libellestructure
     *
     * @return string 
     */
    public function getLibellestructure()
    {
        return $this->libellestructure;
    }

    /**
     * Set statutactivite
     *
     * @param boolean $statutactivite
     * @return Tbstructure
     */
    public function setStatutactivite($statutactivite)
    {
        $this->statutactivite = $statutactivite;

        return $this;
    }

    /**
     * Get statutactivite
     *
     * @return boolean 
     */
    public function getStatutactivite()
    {
        return $this->statutactivite;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbstructure
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
     * @return Tbstructure
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
     * Get idtbstructure
     *
     * @return integer 
     */
    public function getIdtbstructure()
    {
        return $this->idtbstructure;
    }
}
