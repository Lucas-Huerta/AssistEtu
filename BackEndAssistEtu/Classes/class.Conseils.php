<?php

//Conseils

class Conseils implements JsonSerializable
{
    public $idConseil = 0;
    public $contenuConseil = null;

    // déclaration des méthodes
    /**
     * Conseils constructor.
     * @param int $idConseil
     * @param null $contenuConseil
     */
    public function __construct($idConseil, $contenuConseil)
    {
        $this->idConseil = $idConseil;
        $this->contenuConseil = $contenuConseil;
    }

    /**
     * @return int
     */
    public function getIdConseil()
    {
        return $this->idConseil;
    }

    /**
     * @param int $idConseil
     */
    public function setIdConseil($idConseil)
    {
        $this->idConseil = $idConseil;
    }

    /**
     * @return null
     */
    public function getContenuConseil()
    {
        return $this->contenuConseil;
    }

    /**
     * @param null $contenuConseil
     */
    public function setContenuConseil($contenuConseil)
    {
        $this->contenuConseil = $contenuConseil;
    }

    public function jsonSerialize() {
       return get_object_vars($this);
    }

}
