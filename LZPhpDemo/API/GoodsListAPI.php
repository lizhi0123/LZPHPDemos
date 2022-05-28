<?php
include '../Server/db.php';
include '../Server/ResponseJson.php';
header('Access-Control-Allow-Origin:http://localhost:3000'); // *代表允许任何网址请求

//echo  $_GET;
//var_dump($_GET);
$goodsid = 0;
if (!empty($_GET["id"]) ){
    $goodsid = $_GET["id"];
}

//$dsn = "mysql:dbname=LZPhpDemo;host=localhost";
//
//$pdo = new PDO($dsn,'root','');
//$sql = "INSERT INTO `goods` (`id`, `title`) VALUES (NULL, '56');";
$sql = "SELECT * FROM `goods`;";
if ($goodsid != 0){
    $sql = "SELECT * FROM `goods` WHERE id = $goodsid;";
}
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


