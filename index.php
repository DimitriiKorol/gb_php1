<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_SMALL", ROOT . '/img/small/');

include "db.php";
//$imgarray = mysqli_query($db, "SELECT name FROM images");
$imgarray = mysqli_query($db, "SELECT * FROM `images`");

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
    <h2 class="title-h2">Gallery</h2>
    <? include 'menu.php' ?>
    <div class="container">
      <? if($imgarray -> num_rows != 0): ?>
      <? foreach ($imgarray as $name): ?>
      <div class="item"><a class="big" href="image.php?id=<?= $name['id'] ?>"><img src="img/small/<?=$name['name']?>" alt="pic"></a></div>
      <? endforeach; ?>
      <? else: ?>
      Галерея пуста
      <? endif; ?>
    </div>
    <p>Upload images:</p>
    <form class="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" name="load" value="Upload">
    </form>
  </div>

<?php include "calc.php"; ?>
</body>
</html>
