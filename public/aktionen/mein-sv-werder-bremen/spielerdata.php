<?php
require_once("../../include/app.php"); 
header('Content-Type: application/json');

 $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$spieler_sel = $pdo->prepare("SELECT * FROM  `werder_kader_2019` WHERE id = ?");
$spieler_sel->bindValue(1, $id);
$spieler_sel->execute();
$spieler = $spieler_sel->fetch(PDO::FETCH_ASSOC);

echo json_encode($spieler);