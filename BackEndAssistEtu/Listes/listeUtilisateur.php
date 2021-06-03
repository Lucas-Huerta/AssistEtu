<?php

header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Utilisateur.php';

    // Ordre sql
    $sql = "SELECT *
            FROM Utilisateur
            ORDER BY Utilisateur.nom
            ";

    $requete = $pdo->prepare($sql);

    $list = array();

    if($requete->execute()){

        while($donnee = $requete->fetch()){
            $utilisateur = new Utilisateur(
                $donnee['idUtilisateur'],
                $donnee['Nom'],
                $donnee['Prenom'],
                $donnee['Pseudo'],
                $donnee['Age'],
                $donnee['AdresseMail'],
                $donnee['MotDePasse'],
                $donnee['Professeur']
            );

            $list[] = $utilisateur ;
        }
    }

echo json_encode($list);
exit();



