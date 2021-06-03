<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Evenement.php';

// Ordre sql

$sql = " SELECT *
        FROM Evenement, Localisation, Utilisateur 
        WHERE Evenement.idUtilisateur = Utilisateur.idUtilisateur
            AND Evenement.idLieu = Localisation.idLieu
        ORDER BY idEvenement
" ;

    $request = $pdo->prepare($sql);

    $list = array();

if ($request->execute()) {
    while ($donnees = $request->fetch()) {
        $evenement = new Evenement(
            $donnees['idEvenement'],
            $donnees['dateEvenement']
        );
        $list[] = $evenement ;
    }
}

echo json_encode($list);
exit();