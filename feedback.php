<?php
include "db.php";

$row = [];
$button_text = 'Отправить';
$action = 'add';

if ($_GET['action'] == 'edit') {
  $id = (int)$_GET['id'];
  $result = mysqli_query($db, "SELECT * FROM `feedback` WHERE `id` = {$id}");
  $row = mysqli_fetch_assoc($result);
  $button_text = 'Редактировать';
  $action = 'save';
}

if ($_GET['action'] == 'save') {
  $id = (int)$_POST['id'];
  $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['name'])));
  $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['feedback'])));
  $sql = "UPDATE `feedback` SET `name` = '{$name}', `feedback` = '{$feedback}' WHERE `feedback` . `id` = {$id};";
  $result = mysqli_query($db, $sql);

  header("Location: ?message=edit");
  return $sql;
  die();
}

if ($_GET['action'] == 'add') {
  $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['name'])));
  $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$_POST['feedback'])));
  $sql = "INSERT INTO `feedback` (`name`, `feedback`) VALUES ('{$name}', '{$feedback}');";
  $result = mysqli_query($db, $sql);
  header("Location: ?message=OK");
}

$message = [
  "OK" => "Feedback added",
  "edit" => "Feedback edited"
];

$result = mysqli_query($db, "SELECT * FROM `feedback` ORDER BY `id` DESC");

$feed_title = 'Отзывы';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title><?=$feed_title?></title>
</head>
<body>
  <div class="content">
    <?php include "menu.php"?>
    <h2 class="title-h2"><?=$feed_title?></h2>
    <div class="feedback-container">
      <?=$message[$_GET['message']]?>
      <form action="?action=<?=$action?>" class="feedback-form" method="post">
        <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
        <input type="text" name="name" value="<?=$row['name']?>" placeholder="Имя"><br>
        <input type="text" name="feedback" value="<?=$row['feedback']?>" placeholder="Отзыв"><br>
        <input type="submit" name="ok" value=<?=$button_text?>><br>
      </form><br>

      <? foreach ($result as $item): ?>
      <div class="feedback-post">
        <strong><?=$item['name']?></strong>: <?=$item['feedback']?>
        <a href="?action=edit&id=<?=$item['id']?>">[edit]</a>
      </div>
      <? endforeach; ?>
    </div>
  </div>

</body>
</html>
