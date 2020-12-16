<?php
  $title = "Дизайнерские аксессуары для дома";
  $header_text = "Аксессуары для дома, мебель и другое!";
  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $year = date("Y");
?>

<header>
      <div class="header"><?=$title?></div>
    </header>

    <!-- Меню навигации-->
    <nav>
      <hr>
      <ul>
        <li><a href="index.html">Главная</a></li>
        <li><a href="catalog.html">Каталог</a>
          <ul>
            <li><a href="catalog/soapdish.html">Мыльница</a></li>
            <li><a href="catalog/spoonholder.html">Подставка для столовых приборов</a></li>
            <li><a href="catalog/bathcup.html">Стакан для зубных щеток</a></li>
          </ul>
        </li>
        <li><a href="about.html">О нас</a></li>
        <li><a href="contacts.html">Контакты</a></li>
      </ul>
      <hr>
    </nav>

    <div class="container">
      <h1><?=$header_text?></h1>

      <p>Добро пожаловать в&nbsp;наш интернет-магазин. <br>
  Здесь Вы&nbsp;найдете оригинальные аксессуары для Вашего дома: различные мыльницы, полотенцедержатели, вешалки и аксессуары в&nbsp;ванную комнату и&nbsp;многое другое. Все изготовлено из&nbsp;экологически чистых материалов&nbsp;&mdash; дерева и&nbsp;металла и&nbsp;позволит подчеркнуть вашу индивидуальность необычным дизайном.</p>
  <p>Ознакомиться с ассортиментом можно в&nbsp;<a href="catalog.html">Каталоге</a>.</p>
      <p>Если Вас интересует информация о проекте милости просим в раздел <a href="about.html">О нас</a>.</p>
      <p>А ежели Вы хотите с нами связаться, то посмотрите наши <a href="contacts.html">Контакты</a>.</p>
      <hr>
    </div>


    <footer>
      <span>Все права защищены &copy Dmitry <?=$year?> </span>
    </footer>
