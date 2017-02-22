<?php

namespace PilotParc\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbjournalplacemarche
 */
class Tbjournalplacemarche
{
    /**
     * @var integer
     */
    private $tbIdtbplacesmarche;

    /**
     * @var integer
     */
    private $tbIdtbmarche;

    /**
     * @var integer
     */
    private $tbIdtbmarchand;

    /**
     * @var boolean
     */
    private $numeroplace;

    /**
     * @var boolean
     */
    private $presenceabonne;

    /**
     * @var string
     */
    private $jour;

    /**
     * @var float
     */
    private $metres;

    /**
     * @var float
     */
    private $prixaumetre;

    /**
     * @var string
     */
    private $typologieplace;

    /**
     * @var boolean
     */
    private $edf;

    /**
     * @var boolean
     */
    private $encaissement;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \DateTime
     */
    private $datemaj;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $idtbjournalplacemarche;


    /**
     * Set tbIdtbplacesmarche
     *
     * @param integer $tbIdtbplacesmarche
     * @return Tbjournalplacemarche
     */
    public function setTbIdtbplacesmarche($tbIdtbplacesmarche)
    {
        $this->tbIdtbplacesmarche = $tbIdtbplacesmarche;

        return $this;
    }

    /**
     * Get tbIdtbplacesmarche
     *
     * @return integer 
     */
    public function getTbIdtbplacesmarche()
    {
        return $this->tbIdtbplacesmarche;
    }

    /**
     * Set tbIdtbmarche
     *
     * @param integer $tbIdtbmarche
     * @return Tbjournalplacemarche
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
     * @return Tbjournalplacemarche
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
     * Set numeroplace
     *
     * @param boolean $numeroplace
     * @return Tbjournalplacemarche
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
     * Set presenceabonne
     *
     * @param boolean $presenceabonne
     * @return Tbjournalplacemarche
     */
    public function setPresenceabonne($presenceabonne)
    {
        $this->presenceabonne = $presenceabonne;

        return $this;
    }

    /**
     * Get presenceabonne
     *
     * @return boolean 
     */
    public function getPresenceabonne()
    {
        return $this->presenceabonne;
    }

    /**
     * Set jour
     *
     * @param string $jour
     * @return Tbjournalplacemarche
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
     * Set metres
     *
     * @param float $metres
     * @return Tbjournalplacemarche
     */
    public function setMetres($metres)
    {
        $this->metres = $metres;

        return $this;
    }

    /**
     * Get metres
     *
     * @return float 
     */
    public function getMetres()
    {
        return $this->metres;
    }

    /**
     * Set prixaumetre
     *
     * @param float $prixaumetre
     * @return Tbjournalplacemarche
     */
    public function setPrixaumetre($prixaumetre)
    {
        $this->prixaumetre = $prixaumetre;

        return $this;
    }

    /**
     * Get prixaumetre
     *
     * @return float 
     */
    public function getPrixaumetre()
    {
        return $this->prixaumetre;
    }

    /**
     * Set typologieplace
     *
     * @param string $typologieplace
     * @return Tbjournalplacemarche
     */
    public function setTypologieplace($typologieplace)
    {
        $this->typologieplace = $typologieplace;

        return $this;
    }

    /**
     * Get typologieplace
     *
     * @return string 
     */
    public function getTypologieplace()
    {
        return $this->typologieplace;
    }

    /**
     * Set edf
     *
     * @param boolean $edf
     * @return Tbjournalplacemarche
     */
    public function setEdf($edf)
    {
        $this->edf = $edf;

        return $this;
    }

    /**
     * Get edf
     *
     * @return boolean 
     */
    public function getEdf()
    {
        return $this->edf;
    }

    /**
     * Set encaissement
     *
     * @param boolean $encaissement
     * @return Tbjournalplacemarche
     */
    public function setEncaissement($encaissement)
    {
        $this->encaissement = $encaissement;

        return $this;
    }

    /**
     * Get encaissement
     *
     * @return boolean 
     */
    public function getEncaissement()
    {
        return $this->encaissement;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Tbjournalplacemarche
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
     * @return Tbjournalplacemarche
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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Tbjournalplacemarche
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Get idtbjournalplacemarche
     *
     * @return integer 
     */
    public function getIdtbjournalplacemarche()
    {
        return $this->idtbjournalplacemarche;
    }
}
