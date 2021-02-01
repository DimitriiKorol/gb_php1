<?php
define("IMG", "/img/small/");
include('db.php');

$products = mysqli_query($db, "SELECT * FROM `products`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Catalog</title>
</head>
<body>
  <div class="content">
    <h2 class="title-h2">Catalog</h2>
    <? include 'menu.php'; ?>
    <div class="catalog-content">
    <? if($products): ?>
    <? foreach ($products as $item): ?>
    <div class="item">
      <a class="big" href="item.php?id=<?= $item['id'] ?>">
        <h2><?=$item['name']?></h2>
        <img src="<?=IMG . $item['image']?>" alt="pic">
        <p><?=$item['description']?></p>
        <h3><?=$item['price']?></h3>
        <button>Купить</button>
      </a>
    </div>
    <? endforeach; ?>
    <? else: ?>
          Галерея пуста
    <? endif; ?>
    </div>
  </div>

</body>
</html>
