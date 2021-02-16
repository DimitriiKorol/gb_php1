<?php
if (!empty($_POST)) {
  $a = (float)$_POST['a'];
  $b = (float)$_POST['b'];
  $op = $_POST['operation'];

  if ($b === 0 && $op == '/') {
    $equal = 'Error you are dividing to zero';
  } else {
    $arr = strip_tags(htmlspecialchars($a.$op.$b));
    $equal= eval('return '.$arr.';');
  }
}
?>

<div><b>Калькулятор</b></div>
<form action="" class="calc" method="post">
  <input type="text" name="a" value="<?=$_POST['a']?>">
  <select name="operation">
    <option <? if ($_POST['operation'] == '+') echo "selected"; ?> value="+">+</option>
    <option <? if ($_POST['operation'] == '-') echo "selected"; ?> value="-">-</option>
    <option <? if ($_POST['operation'] == '*') echo "selected"; ?> value="*">*</option>
    <option <? if ($_POST['operation'] == '/') echo "selected"; ?> value="/">/</option>
  </select>
  <input type="text" name="b" value="<?=$_POST['b']?>">
  <input type="submit" value="=">
  <input type="text" name="equal" readonly value="<?= $equal?>">
</form><br>
