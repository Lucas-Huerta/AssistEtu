<?php

//Forum

class Forum implements JsonSerializable
{
    public $idForum = 0;
    public $tchat = null;

    /**
     * Forum constructor.
     * @param int $idForum
     * @param null $tchat
     */
    public function __construct($idForum, $tchat)
    {
        $this->idForum = $idForum;
        $this->tchat = $tchat;
    }

    /**
     * @return int
     */
    public function getIdForum()
    {
        return $this->idForum;
    }

    /**
     * @param int $idForum
     */
    public function setIdForum($idForum)
    {
        $this->idForum = $idForum;
    }

    /**
     * @return null
     */
    public function getTchat()
    {
        return $this->tchat;
    }

    /**
     * @param null $tchat
     */
    public function setTchat($tchat)
    {
        $this->tchat = $tchat;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
