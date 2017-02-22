<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbtravailabonnesmarchejour
 */
class Tbtravailabonnesmarchejour
{
    /**
     * @var integer
     */
    private $tbIdtbactivitemarchand;

    /**
     * @var integer
     */
    private $idtbmarchand;

    /**
     * @var integer
     */
    private $tbIdtbville;

    /**
     * @var string
     */
    private $raisonsocialemarchand;

    /**
     * @var integer
     */
    private $idplacemarche;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var boolean
     */
    private $numeroplace;

    /**
     * @var integer
     */
    private $tbIdtbmarchand;

    /**
     * @var integer
     */
    private $idtravailabonnesmarchejour;


    /**
     * Set tbIdtbactivitemarchand
     *
     * @param integer $tbIdtbactivitemarchand
     * @return Tbtravailabonnesmarchejour
     */
    public function setTbIdtbactivitemarchand($tbIdtbactivitemarchand)
    {
        $this->tbIdtbactivitemarchand = $tbIdtbactivitemarchand;

        return $this;
    }

    /**
     * Get tbIdtbactivitemarchand
     *
     * @return integer 
     */
    public function getTbIdtbactivitemarchand()
    {
        return $this->tbIdtbactivitemarchand;
    }

    /**
     * Set idtbmarchand
     *
     * @param integer $idtbmarchand
     * @return Tbtravailabonnesmarchejour
     */
    public function setIdtbmarchand($idtbmarchand)
    {
        $this->idtbmarchand = $idtbmarchand;

        return $this;
    }

    /**
     * Get idtbmarchand
     *
     * @return integer 
     */
    public function getIdtbmarchand()
    {
        return $this->idtbmarchand;
    }

    /**
     * Set tbIdtbville
     *
     * @param integer $tbIdtbville
     * @return Tbtravailabonnesmarchejour
     */
    public function setTbIdtbville($tbIdtbville)
    {
        $this->tbIdtbville = $tbIdtbville;

        return $this;
    }

    /**
     * Get tbIdtbville
     *
     * @return integer 
     */
    public function getTbIdtbville()
    {
        return $this->tbIdtbville;
    }

    /**
     * Set raisonsocialemarchand
     *
     * @param string $raisonsocialemarchand
     * @return Tbtravailabonnesmarchejour
     */
    public function setRaisonsocialemarchand($raisonsocialemarchand)
    {
        $this->raisonsocialemarchand = $raisonsocialemarchand;

        return $this;
    }

    /**
     * Get raisonsocialemarchand
     *
     * @return string 
     */
    public function getRaisonsocialemarchand()
    {
        return $this->raisonsocialemarchand;
    }

    /**
     * Set idplacemarche
     *
     * @param integer $idplacemarche
     * @return Tbtravailabonnesmarchejour
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
     * Set jour
     *
     * @param string $jour
     * @return Tbtravailabonnesmarchejour
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
     * Set numeroplace
     *
     * @param boolean $numeroplace
     * @return Tbtravailabonnesmarchejour
     */
    public function setNumeroplace($numeroplace)
    {
        $this->numeroplace = $numeroplace;

        return $this;
    }

    /**
     * Get numeroplace
     *
     * @return boolean 
     */
    public function getNumeroplace()
    {
        return $this->numeroplace;
    }

    /**
     * Set tbIdtbmarchand
     *
     * @param integer $tbIdtbmarchand
     * @return Tbtravailabonnesmarchejour
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
     * Get idtravailabonnesmarchejour
     *
     * @return integer 
     */
    public function getIdtravailabonnesmarchejour()
    {
        return $this->idtravailabonnesmarchejour;
    }
}
