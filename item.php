<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . '/img/big/');

include "db.php";

$id = (int)$_GET['id'];
$result = mysqli_query($db, "SELECT * FROM products WHERE id = {$id}");

$messg = "";

if ($result->num_rows != 0) {
  $itemres = mysqli_fetch_assoc($result);
} else {
  $messg = "No file found in db";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title><?=$itemres['name']?></title>
</head>
<body>
  <div class="content">
    <? include('menu.php'); ?>
    <h2 class="title-h2"><?=$itemres['name']?></h2>
    <div class="item-container">

      <? if(empty($messg)): ?>
      <div class="item-large">
        <h2><?=$itemres['name']?></h2>
        <img src="img/large/<?=$itemres['image']?>" alt="pic"></div>
        <p><?=$itemres['description']?></p>
        <h3><?=$itemres['price']?></h3>
        <div class="buy-btn">
          <a href="#"></a>
          <button>Купить</button>
        </div>
      <? else: ?>
      <p style="color: red;"><?= $messg ?></p>
      <? endif; ?>
    </div>
  </div>

</body>
</html>
