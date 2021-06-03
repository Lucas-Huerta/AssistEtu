<?php

//Evenement

class Evenement implements JsonSerializable
{
    public $idEvenement = 0;
    public $dateEvenement = null;

    /**
     * Evenement constructor.
     * @param int $idEvenement
     * @param null $dateEvenement
     */
    public function __construct($idEvenement, $dateEvenement)
    {
        $this->idEvenement = $idEvenement;
        $this->dateEvenement = $dateEvenement;
    }

    /**
     * @return int
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * @param int $idEvenement
     */
    public function setIdEvenement($idEvenement)
    {
        $this->idEvenement = $idEvenement;
    }

    /**
     * @return null
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * @param null $dateEvenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
