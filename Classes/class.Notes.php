<?php

//Notes

class Notes implements JsonSerializable
{
    public $note = 0;
    public $commentaireNote = null;

    // déclaration des méthodes
    function __construct($note, $commentaire){
        $this->note =$note ;
        $this->commentaireNote = $commentaire;
    }

    /**
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param int $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return null
     */
    public function getCommentaireNote()
    {
        return $this->commentaireNote;
    }

    /**
     * @param null $commentaireNote
     */
    public function setCommentaireNote($commentaireNote)
    {
        $this->commentaireNote = $commentaireNote;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}
