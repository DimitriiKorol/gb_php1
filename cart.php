<?php
define("IMG", "/img/small/");
include('db.php');

if ($_GET['action'] == 'delete') {
  $id = (int)$_GET['id'];
  $result = mysqli_query($db, "SELECT `session_id` FROM `cart` WHERE `id`={$id}");
  $row = mysqli_fetch_assoc($result);
  if ($session == $row['session_id'])
    mysqli_query($db, "DELETE FROM `cart` WHERE `cart`.`id` = {$id}");
  header("Location: /cart.php");
}

$cart = mysqli_query($db, "SELECT cart.id cart_id, products.image, products.id product_id, products.name, products.description, products.price FROM `cart`,`products` WHERE cart.good_id=products.id AND session_id = '{$session}'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Cart</title>
</head>
<body>
  <div class="content">
    <h2 class="title-h2">Cart</h2>
    <? include 'menu.php'; ?>
    <div class="cart-content">
    <? if($cart): ?>
    <? foreach ($cart as $item): ?>
    <div class="cart-item">
      <a class="cart-item-container" href="item.php?id=<?= $item['product_id'] ?>">
        <img src="<?=IMG . $item['image']?>" alt="pic">
        <div class="item-desc-cont">
          <h2><?=$item['name']?></h2>
          <p><?=$item['description']?></p>
        </div>
        <h3><?=$item['price']?></h3>
      </a>
      <a href="?action=delete&id=<?= $item['cart_id'] ?>">
        <button>Удалить</button>
      </a>
    </div>
    <? endforeach; ?>
    <? else: ?>
          Корзина пуста!
    <? endif; ?>
    </div>
  </div>

</body>
</html>
