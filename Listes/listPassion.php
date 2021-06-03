<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Passion.php';

// Ordre sql

$sql = " SELECT *
        FROM Passion
        ORDER BY libellePassion ASC
" ;

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $passion = new Passion (
            $donnee['idPassion'],
            $donnee['libellePassion']
        );
        $list[] = $passion ;
    }
}

echo json_encode($list);
exit();