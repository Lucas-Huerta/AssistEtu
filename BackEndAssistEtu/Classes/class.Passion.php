<?php

//Passion

class Passion implements JsonSerializable
{
    public $idPassion = 0 ;
    public $libellePassion = null ;

    /**
     * Passion constructor.
     * @param int $idPassion
     * @param null $libellePassion
     */
    public function __construct($idPassion, $libellePassion)
    {
        $this->idPassion = $idPassion;
        $this->libellePassion = $libellePassion;
    }

    /**
     * @return int
     */
    public function getIdPassion()
    {
        return $this->idPassion;
    }

    /**
     * @param int $idPassion
     */
    public function setIdPassion($idPassion)
    {
        $this->idPassion = $idPassion;
    }

    /**
     * @return null
     */
    public function getLibellePassion()
    {
        return $this->libellePassion;
    }

    /**
     * @param null $libellePassion
     */
    public function setLibellePassion($libellePassion)
    {
        $this->libellePassion = $libellePassion;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}

