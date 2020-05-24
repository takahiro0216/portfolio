<?php
require_once("phpQuery-onefile.php");
session_start();

$file = fopen("data.csv" ,"a");

$html = file_get_contents("$_SESSION[url]");

$title_num = count(phpQuery::newDocument($html)->find(".product-title"));
$price_num = count(phpQuery::newDocument($html)->find(".price"));


for($i=0,$p=1; $p<$price_num; $i++,$p++){
  $titles = phpQuery::newDocument($html)->find(".product-title:eq($i)")->text();
  $price = phpQuery::newDocument($html)->find(".price:eq($p)")->text();
  

    fwrite($file,$titles.$price."\n");
  

  sleep(3);
}


fclose($file);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>リサーチ完了！</h1>
  <p>csvはMAMPのhtdocs→iHerbの中にあるよ！</p>
</body>
</html>