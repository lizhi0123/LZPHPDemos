<?php
include '../Server/db.php';
include '../Server/ResponseJson.php';

//echo  $_GET;
//var_dump($_GET);

//$dsn = "mysql:dbname=LZPhpDemo;host=localhost";
//
//$pdo = new PDO($dsn,'root','');
//$sql = "INSERT INTO `goods` (`id`, `title`) VALUES (NULL, '56');";
$sql = "SELECT * FROM `goods`;";
$sth = $pdo->prepare($sql);
$isSuccess =  $sth->execute();
//var_dump($sth);
$data = $sth->fetchAll();
//var_dump($data);
$apiResult ;
if ($isSuccess){
    $apiResult = jsonSuccessData($data);
}else {
    $apiResult = jsonResponse(201,message: 'error',data: []);
}

echo  $apiResult;
