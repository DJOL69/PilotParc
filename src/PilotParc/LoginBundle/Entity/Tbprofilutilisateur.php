<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbprofilutilisateur
 */
class Tbprofilutilisateur
{
    /**
     * @var integer
     */
    private $tbIdtbutilisateurs;

    /**
     * @var integer
     */
    private $tbIdtbdroits;

    /**
     * @var string
     */
    private $libelleprofil;

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
    private $idtbprofilutilisateur;


    /**
     * Set tbIdtbutilisateurs
     *
     * @param integer $tbIdtbutilisateurs
     * @return Tbprofilutilisateur
     */
    public function setTbIdtbutilisateurs($tbIdtbutilisateurs)
    {
        $this->tbIdtbutilisateurs = $tbIdtbutilisateurs;

        return $this;
    }

    /**
     * Get tbIdtbutilisateurs
     *
     * @return integer 
     */
    public function getTbIdtbutilisateurs()
    {
        return $this->tbIdtbutilisateurs;
    }

    /**
     * Set tbIdtbdroits
     *
     * @param integer $tbIdtbdroits
     * @return Tbprofilutilisateur
     */
    public function setTbIdtbdroits($tbIdtbdroits)
    {
        $this->tbIdtbdroits = $tbIdtbdroits;

        return $this;
    }

    /**
     * Get tbIdtbdroits
     *
     * @return integer 
     */
    public function getTbIdtbdroits()
    {
        return $this->tbIdtbdroits;
    }

    /**
     * Set libelleprofil
     *
     * @param string $libelleprofil
     * @return Tbprofilutilisateur
     */
    public function setLibelleprofil($libelleprofil)
    {
        $this->libelleprofil = $libelleprofil;

        return $this;
    }

    /**
     * Get libelleprofil
     *
     * @return string 
     */
    public function getLibelleprofil()
    {
        return $this->libelleprofil;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbprofilutilisateur
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
     * @return Tbprofilutilisateur
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
     * Get idtbprofilutilisateur
     *
     * @return integer 
     */
    public function getIdtbprofilutilisateur()
    {
        return $this->idtbprofilutilisateur;
    }
}
