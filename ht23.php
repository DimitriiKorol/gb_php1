<?php
$a = rand(0, 10);
$b = rand(0, 10);

function sum($a, $b)
{
  return $a + $b;
}
function sub($a, $b)
{
  return $a - $b;
}
function mult($a, $b)
{
  return $a * $b;
}
function divide($a, $b)
{
  return $a / $b;
}

echo sum($a, $b), "<br>";
echo sub($a, $b), "<br>";
echo mult($a, $b), "<br>";
echo divide($a, $b), "<br>";
?>
