<?php
  $a = rand(-10, 10);
  $b = rand(-10, 10);

  if ($a >= 0 && $b >= 0) {
    echo "Оба числа положительные<br>";
    $action = "Разность: ";
    $result = $a - $b;
  } elseif ($a < 0 && $b < 0) {
    echo "Оба числа отрицательные<br>";
    $action = "Произведение: ";
    $result = $a * $b;
  } else {
    echo "Оба числа разных знаков<br>";
    $action = "Сумма: ";
    $result = $a + $b;
  }
  echo $action, $result;
?>
