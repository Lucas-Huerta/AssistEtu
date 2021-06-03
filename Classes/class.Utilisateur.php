<?php

//Utilisateur

class Utilisateur implements JsonSerializable
{
    // déclaration d'une propriété
    public $idUtilisateur = 0;
    public $nom = null;
    public $prenom = null;
    public $age = 0;
    public $pseudo = null;
    public $adresseMail = null;
    public $motDePasse = null;
    public $professeur = TRUE ;

    // déclaration des méthodes
    function __construct($id, $nom, $prenom, $age, $pseudo, $adresseMail,
                        $motDePasse,$professeur) {
        $this->idUtilisateur = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->pseudo = $pseudo;
        $this->adresseMail =$adresseMail;
        $this->motDePasse = $motDePasse;
        $this->professeur = $professeur;
    }

    /**
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param int $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param null $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return null
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param null $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return null
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * @param null $adresseMail
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;
    }

    /**
     * @return null
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param null $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    /**
     * @return bool
     */
    public function isProfesseur()
    {
        return $this->professeur;
    }

    /**
     * @param bool $professeur
     */
    public function setProfesseur($professeur)
    {
        $this->professeur = $professeur;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}


