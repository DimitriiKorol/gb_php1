<?php
$arg1 = rand(1, 10);
$arg2 = rand(1, 10);
$arrayops = array("sum", "substr", "mult", "divide");
$operation = $arrayops[array_rand($arrayops, 1)];
echo $operation, "<br>";

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case "sum":
      $result = $arg1 + $arg2;
      break;
    case "substr":
      $result = $arg1 - $arg2;
      break;
    case "mult":
      $result = $arg1 * $arg2;
      break;
    case "divide":
      $result = $arg1 / $arg2;
      break;
  }
    return $result;
}

echo mathOperation($arg1, $arg2, $operation);
?>
