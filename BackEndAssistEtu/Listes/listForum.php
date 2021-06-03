<?php
header("Access-Control-Allow-Origin: *");

require_once '../cnx.php';
require_once '../Classes/class.Forum.php';

// Ordre sql

$sql = " SELECT * FROM Forum 
        ORDER BY idForum
" ;

$request = $pdo->prepare($sql);

$list = array();

if ($request->execute()) {
    while ($donnee = $request->fetch()) {
        $forum = new Forum (
            $donnee['idForum'],
            $donnee['Tchat']
        );
        $list[] = $forum ;
    }
}

echo json_encode($list);
exit();