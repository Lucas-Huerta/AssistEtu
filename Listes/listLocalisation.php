<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Localisation.php';

// Ordre sql

$sql = " SELECT *
        FROM Localisation 
        ORDER BY libelleVille
" ;

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $localisation = new Localisation (
            $donnee['idLieu'],
            $donnee['libelleVille'],
            $donnee['codePostal']
        );
        $list[] = $localisation ;
    }
}

echo json_encode($list);
exit();