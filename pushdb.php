<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_SMALL", ROOT . '/img/small/');

include "db.php";

$result = mysqli_query($db, "SELECT id FROM images");

if ($result->num_rows == 0) {
  echo "Table is empty. Fill it in";
  $imgs = array_splice(scandir(IMG_SMALL), 2);
  mysqli_query($db, "INSERT INTO images(`name`) VALUES ('" . implode("'),('", $imgs) . "')");
} else {
  echo "Table is not empty.";
}
