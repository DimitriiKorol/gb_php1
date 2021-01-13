<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_SMALL", ROOT . '/img/small/');
define("IMG_BIG", ROOT . '/img/big/');

/*if (isset($_POST['load'])) {
  $path_big = IMG_BIG . $_FILES["image"]["name"];
  $path_small = IMG_SMALL . $_FILES["image"]["name"];

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)) {
    header("Location: /");
  } else {
    echo "smthing went wrong<br>";
    die();
  }
}*/

function get_imgs($path) {
  return array_splice(scandir($path), 2);
}

//$imgarray = array_splice(scandir('img/small/'), 2);
$imgarray = get_imgs(IMG_SMALL);

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
<div class="item"><img src="img/large/<?=$name?>" alt="" class="big"><img src="img/small/<?=$name?>" alt=""></div>
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
