<?php if(!$auth): ?>
  <form class="menu-auth" method="post">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="send" value="Submit">
  </form>
<?php else:?>
  Welcome, <?=$user?>! <a href="/?logout">Logout</a><br>
<?php endif; ?>
<ul class="menu">
  <li><a href="/">Главная</a></li>
  <li><a href="/catalog.php">Каталог</a></li>
  <li><a href="/cart.php">Корзина <?= $count ?></a></li>
  <li><a href="/feedback.php">Отзывы</a></li>
</ul>
