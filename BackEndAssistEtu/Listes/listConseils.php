<?php
header("Access-Control-Allow-Origin: *");

require_once '../../cnx.php';
require_once '../Classes/class.Conseils.php';

$sql = "SELECT * FROM Conseils";

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnees = $request->fetch()) {
        $conseil = new Conseils (
            $donnees['idConseil'],
            $donnees['contenuConseil']
        );
    $list[] = $conseil;
    }
}

echo json_encode($list);
exit();
