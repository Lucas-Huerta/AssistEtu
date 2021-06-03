<?php
//Localisation

class Localisation implements JsonSerializable
{
    public $idLieu = 0;
    public $libelleVille = null ;
    public $codePostal = 0 ;

    /**
     * Localisation constructor.
     * @param int $idLieu
     * @param null $libelleVille
     * @param int $codePostal
     */
    public function __construct($idLieu, $libelleVille, $codePostal)
    {
        $this->idLieu = $idLieu;
        $this->libelleVille = $libelleVille;
        $this->codePostal = $codePostal;
    }

    /**
     * @return int
     */
    public function getIdLieu()
    {
        return $this->idLieu;
    }

    /**
     * @param int $idLieu
     */
    public function setIdLieu($idLieu)
    {
        $this->idLieu = $idLieu;
    }

    /**
     * @return null
     */
    public function getLibelleVille()
    {
        return $this->libelleVille;
    }

    /**
     * @param null $libelleVille
     */
    public function setLibelleVille($libelleVille)
    {
        $this->libelleVille = $libelleVille;
    }

    /**
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
