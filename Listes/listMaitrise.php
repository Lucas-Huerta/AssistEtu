<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Maitrise.php';

$sql = "SELECT * FROM Maitrise";

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $maitrise = new Maitrise (
            $donnee['libelleMatiereMaitrise']
        );

        $list[] = $maitrise;
    }
}

echo json_encode($list);
exit();
