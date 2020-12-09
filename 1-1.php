
<?php // ДЗ №1
  echo "Hello, World!"; // ура работает!
?>
<br>
<br>
<?php
  $name = "GeekBrains user";
  echo "Hello, $name!";
?>
<br>
<br>
<?php
  // ДЗ №2 Примеры из методички
  define ( 'MY_CONST' , 100 );
  echo MY_CONST;
?>
<br>
<br>
<?php
  $int10 = 42;
  $int2 = 0b101010;
  $int8 = 052;
  $int16 = 0x2A;
  echo "Десятеричная система $int10 <br>";
  echo "Двоичная система $int2 <br>";
  echo "Восьмеричная система $int8 <br>";
  echo "Шестнадцатеричная система $int16 <br>";
?>
<br>
<br>
<?php
  $precise1 = 1.5;
  $precise2 = 1.5e4;
  $precise3 = 6E-8;
  echo "$precise1 | $precise2 | $precise3";
?>
<br>
<br>
<?php
  $a = 1;
  echo "$a";
  echo '$a';
?>
<br>
<br>
<?php
  $a = 10;
  $b = (boolean)$b;
  echo gettype($b);
?>
<br>
<br>
<?php
  $a = 'Hello,';
  $b = 'world';
  $c = $a . $b;
  echo $c;
?>
<br>
<br>
<?php
  $a = 4;
  $b = 5;
  echo $a + $b . '<br>' ; // сложение
  echo $a * $b . '<br>' ; // умножение
  echo $a - $b . '<br>' ; // вычитание
  echo $a / $b . '<br>' ; // деление
  echo $a % $b . '<br>' ; // остаток от деления
  echo $a ** $b . '<br>' ; // возведение в степень
?>
<br>
<br>
<?php
  $a = 4;
  $b = 5;
  $a += $b;
  echo 'a = ' . $a;
  $a = 0;
  echo $a ++; // Постинкремент
  echo ++ $a ; // Преинкремент
  echo $a --; // Постдекремент
  echo -- $a ; // Предекремент
?>
<br>
<br>
<?php
$a = 4;
$b = 5;
  var_dump ( $a == $b ); // Сравнение по значению
  var_dump ( $a === $b ); // Сравнение по значению и типу
  var_dump ( $a > $b ); // Больше
  var_dump ( $a < $b ); // Меньше
  var_dump ( $a <> $b ); // Не равно
  var_dump ( $a != $b ); // Не равно
  var_dump ( $a !== $b ); // Не равно без приведения типов
  var_dump ( $a <= $b ); // Меньше или равно
  var_dump ( $a >= $b ); // Больше или равно
?>
<br>
<br>
<?php // ДЗ №3
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? - Преобразование типов, сравнение по значению: 5 = 5
    var_dump((int)'012345');     // Почему 12345? - ноль убирается при преобразовании в целое число.
    var_dump((float)123.0 === (int)123.0); // Почему false? - Сравнение по типу(!) число с точкой не равно целому
    var_dump((int)0 === (int)'hello, world'); // Почему true? - Сравнение по типу, строка преобразуется в 0 если нет чисел
?>
<br>
<br>
<?php // ДЗ №5
  $a = 1;
  $b = 2;
  $a = $a + $b;
  $b = $a - $b;
  $a = $a - $b;
  echo "a = $a, b = $b";
?>

<br>
<br>
<?php // ДЗ №5
  $a = 1;
  $b = 2;
  $a = $a ^ $b ^ $b = $a; // Здесь я просто списал с урока ))
  echo "a = $a, b = $b";
?>
