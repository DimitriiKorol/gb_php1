<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_SMALL", ROOT . '/img/small/');
define("IMG_BIG", ROOT . '/img/big/');

include "db.php";
//$imgarray = mysqli_query($db, "SELECT name FROM images");
$imgarray = mysqli_query($db, "SELECT * FROM images");
var_dump(mysqli_query($db, "SELECT name FROM `images`"));

//$imgarray = array_splice(scandir('img/small/'), 2);

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
    <div class="container">

<? foreach ($imgarray as $name): ?>
<div class="item"><a class="big" href="/image.php?id=<?= $name['id'] ?>"><img src="img/small/<?=$name['name']?>" alt="pic"></a></div>
<? endforeach; ?>

    </div>
    <p>Upload images:</p>
    <form class="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" name="load" value="Upload">
    </form>
  </div>

</body>
</html>
