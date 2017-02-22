<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbtiragejourmarche
 */
class Tbtiragejourmarche
{
    /**
     * @var integer
     */
    private $tbIdtbtiragejour;

    /**
     * @var integer
     */
    private $tbIdtbmarchand;

    /**
     * @var integer
     */
    private $tbIdmarche;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var \DateTime
     */
    private $journee;

    /**
     * @var boolean
     */
    private $numero;

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
    private $idtbtirageplacejourmarche;


    /**
     * Set tbIdtbtiragejour
     *
     * @param integer $tbIdtbtiragejour
     * @return Tbtiragejourmarche
     */
    public function setTbIdtbtiragejour($tbIdtbtiragejour)
    {
        $this->tbIdtbtiragejour = $tbIdtbtiragejour;

        return $this;
    }

    /**
     * Get tbIdtbtiragejour
     *
     * @return integer 
     */
    public function getTbIdtbtiragejour()
    {
        return $this->tbIdtbtiragejour;
    }

    /**
     * Set tbIdtbmarchand
     *
     * @param integer $tbIdtbmarchand
     * @return Tbtiragejourmarche
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
     * Set tbIdmarche
     *
     * @param integer $tbIdmarche
     * @return Tbtiragejourmarche
     */
    public function setTbIdmarche($tbIdmarche)
    {
        $this->tbIdmarche = $tbIdmarche;

        return $this;
    }

    /**
     * Get tbIdmarche
     *
     * @return integer 
     */
    public function getTbIdmarche()
    {
        return $this->tbIdmarche;
    }

    /**
     * Set jour
     *
     * @param string $jour
     * @return Tbtiragejourmarche
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
     * Set journee
     *
     * @param \DateTime $journee
     * @return Tbtiragejourmarche
     */
    public function setJournee($journee)
    {
        $this->journee = $journee;

        return $this;
    }

    /**
     * Get journee
     *
     * @return \DateTime 
     */
    public function getJournee()
    {
        return $this->journee;
    }

    /**
     * Set numero
     *
     * @param boolean $numero
     * @return Tbtiragejourmarche
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return boolean 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbtiragejourmarche
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
     * @return Tbtiragejourmarche
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
     * Get idtbtirageplacejourmarche
     *
     * @return integer 
     */
    public function getIdtbtirageplacejourmarche()
    {
        return $this->idtbtirageplacejourmarche;
    }
}
