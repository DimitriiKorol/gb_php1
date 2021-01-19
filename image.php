<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . '/img/big/');

include "db.php";

$id = (int)$_GET['id'];
$result = mysqli_query($db, "SELECT * FROM images WHERE id = {$id}");
//$imgres = mysqli_fetch_assoc($result);
$messg = "";

if ($result->num_rows != 0) {
  $imgres = mysqli_fetch_assoc($result);
} else {
  $messg = "No file found in db";
}
var_dump($imgres);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Gallery</title>
</head>
<body>
  <div class="content">
    <a href="/">Главная</a>
    <h2 class="title-h2">Gallery</h2>
    <div class="container">

<? if(empty($messg)): ?>
<div class="item"><img src="img/large/<?=$imgres['name']?>" alt="pic"></div>
<? else: ?>
      <p style="color: red;"><?= $messg ?></p>
<? endif; ?>
    </div>
    <p>Upload images:</p>
    <form class="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" name="load" value="Upload">
    </form>
  </div>

</body>
</html>
