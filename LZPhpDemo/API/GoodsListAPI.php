<?php
include '../Server/db.php';
//echo  $_GET;
//var_dump($_GET);

//$dsn = "mysql:dbname=LZPhpDemo;host=localhost";
//
//$pdo = new PDO($dsn,'root','');
//$sql = "INSERT INTO `goods` (`id`, `title`) VALUES (NULL, '56');";
$sql = "SELECT * FROM `goods`;";
$sth = $pdo->prepare($sql);
$sth->execute();
echo "  ";
var_dump($sth);
$data = $sth->fetchAll();
var_dump($data);