<?php

//Matiere

class Matiere implements JsonSerializable
{
    public $idMatiere = 0;
    public $libelleMatiere = null;

    /**
     * Matiere constructor.
     * @param int $idMatiere
     * @param null $libelleMatiere
     */
    public function __construct($idMatiere, $libelleMatiere)
    {
        $this->idMatiere = $idMatiere;
        $this->libelleMatiere = $libelleMatiere;
    }

    /**
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * @param int $idMatiere
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;
    }

    /**
     * @return null
     */
    public function getLibelleMatiere()
    {
        return $this->libelleMatiere;
    }

    /**
     * @param null $libelleMatiere
     */
    public function setLibelleMatiere($libelleMatiere)
    {
        $this->libelleMatiere = $libelleMatiere;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
