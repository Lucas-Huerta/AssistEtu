<?php

//Maitrise

class Maitrise implements JsonSerializable
{
    public $libelleMatiereMaitriser ;

    /**
     * Maitrise constructor.
     * @param $libelleMatiereMaitriser
     */
    public function __construct($libelleMatiereMaitriser)
    {
        $this->libelleMatiereMaitriser = $libelleMatiereMaitriser;
    }

    /**
     * @return mixed
     */
    public function getLibelleMatiereMaitriser()
    {
        return $this->libelleMatiereMaitriser;
    }

    /**
     * @param mixed $libelleMatiereMaitriser
     */
    public function setLibelleMatiereMaitriser($libelleMatiereMaitriser)
    {
        $this->libelleMatiereMaitriser = $libelleMatiereMaitriser;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}

