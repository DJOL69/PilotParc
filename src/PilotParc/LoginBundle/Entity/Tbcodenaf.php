<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbcodenaf
 */
class Tbcodenaf
{
    /**
     * @var string
     */
    private $codenaf;

    /**
     * @var string
     */
    private $libellenaf;

    /**
     * @var boolean
     */
    private $actif;

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
    private $idtbcodenaf;


    /**
     * Set codenaf
     *
     * @param string $codenaf
     * @return Tbcodenaf
     */
    public function setCodenaf($codenaf)
    {
        $this->codenaf = $codenaf;

        return $this;
    }

    /**
     * Get codenaf
     *
     * @return string 
     */
    public function getCodenaf()
    {
        return $this->codenaf;
    }

    /**
     * Set libellenaf
     *
     * @param string $libellenaf
     * @return Tbcodenaf
     */
    public function setLibellenaf($libellenaf)
    {
        $this->libellenaf = $libellenaf;

        return $this;
    }

    /**
     * Get libellenaf
     *
     * @return string 
     */
    public function getLibellenaf()
    {
        return $this->libellenaf;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Tbcodenaf
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbcodenaf
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
     * @return Tbcodenaf
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
     * Get idtbcodenaf
     *
     * @return integer 
     */
    public function getIdtbcodenaf()
    {
        return $this->idtbcodenaf;
    }
}
