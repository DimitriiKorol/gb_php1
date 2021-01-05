<?php
$title = "SSS";
$header = "Super Simple Site";
$menu = include 'menu.php';
$content = include 'content.php';
$footer = include 'footer.php';
?>

<head>
  <title><?=$title?></title>
</head>
<div>
<h1><?=$header?></h1>
<?=$menu?>
<?=$content?>
<?=$footer?>
</div>
