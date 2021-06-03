<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Matiere.php';

// Ordre sql

$sql = " SELECT *
        FROM Matiere
        ORDER BY libelleMatiere
" ;

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $matiere = new Matiere (
            $donnee['idMatiere'],
            $donnee['libelleMatiere']
        );
        $list[] = $matiere ;
    }
}

echo json_encode($list);
exit();