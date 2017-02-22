<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbdroits
 */
class Tbdroits
{
    /**
     * @var integer
     */
    private $tbIdtbstructure;

    /**
     * @var string
     */
    private $libelledroit;

    /**
     * @var boolean
     */
    private $rangdroit;

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
    private $idtbdroits;


    /**
     * Set tbIdtbstructure
     *
     * @param integer $tbIdtbstructure
     * @return Tbdroits
     */
    public function setTbIdtbstructure($tbIdtbstructure)
    {
        $this->tbIdtbstructure = $tbIdtbstructure;

        return $this;
    }

    /**
     * Get tbIdtbstructure
     *
     * @return integer 
     */
    public function getTbIdtbstructure()
    {
        return $this->tbIdtbstructure;
    }

    /**
     * Set libelledroit
     *
     * @param string $libelledroit
     * @return Tbdroits
     */
    public function setLibelledroit($libelledroit)
    {
        $this->libelledroit = $libelledroit;

        return $this;
    }

    /**
     * Get libelledroit
     *
     * @return string 
     */
    public function getLibelledroit()
    {
        return $this->libelledroit;
    }

    /**
     * Set rangdroit
     *
     * @param boolean $rangdroit
     * @return Tbdroits
     */
    public function setRangdroit($rangdroit)
    {
        $this->rangdroit = $rangdroit;

        return $this;
    }

    /**
     * Get rangdroit
     *
     * @return boolean 
     */
    public function getRangdroit()
    {
        return $this->rangdroit;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbdroits
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
     * @return Tbdroits
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
     * Get idtbdroits
     *
     * @return integer 
     */
    public function getIdtbdroits()
    {
        return $this->idtbdroits;
    }
}
