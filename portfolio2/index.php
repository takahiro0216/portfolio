<?php
session_start();

if(!empty($_POST)){
  $_SESSION['url'] = $_POST['url'];
  header('Location: test.php');
  exit();
}


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索</title>
</head>
<body>
  <form action="" method="post">
    <input type="text"  name="url" placeholder="URLを入力">
    <input type="submit" value="GO!" >  
  
  </form>
</body>
</html>