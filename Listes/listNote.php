<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Note.php';

// Ordre sql

$sql = " SELECT *
        FROM Note, Utilisateur
        WHERE Note.idUtilisateur = Utilisateur.idUtilisateur
        ORDER BY Note ASC
" ;

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $note = new Note (
            $donnee['Note'],
            $donnee['commentaireNote']
        );
        $list[] = $note ;
    }
}

echo json_encode($list);
exit();