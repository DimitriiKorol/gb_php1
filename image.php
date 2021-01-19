<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . '/img/big/');

include "db.php";

$imgarray = mysqli_query($db, "SELECT * FROM images");

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


<div class="item"><img src="img/big/<?=$name['name']?>" alt="pic"></div>


    </div>
    <p>Upload images:</p>
    <form class="" method="post" enctype="multipart/form-data">
      <input type="file" name="image">
      <input type="submit" name="load" value="Upload">
    </form>
  </div>

</body>
</html>
