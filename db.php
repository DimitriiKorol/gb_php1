<?php
session_start();
$db = @mysqli_connect("localhost:3306", "gbuser1", "gb45acp", "geekbrains") or Die(mysqli_connect_error());

$session = session_id();
$result = mysqli_query($db, "SELECT COUNT(id) as count FROM `cart` WHERE `session_id`='{$session}'");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

//Authentification
$auth = false;

if (is_auth()) {
  $auth = true;
  $user = get_user();
}

if (isset($_POST['send'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  if (!auth($login, $password)) {
    Die('Wrong login or password!');
  } else {
    $auth = true;
    $user = get_user();
  }
}

function auth($login, $password) {
  global $db;
  $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login)));
  $result = mysqli_query($db, "SELECT * FROM users WHERE login = '{$login}'");
  $row = mysqli_fetch_assoc($result);

  if ($password === $row['pass']) {
    //$_SESSION['login'] = $login;
    return true;
  }
  return false;
}

if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: " . $_SERVER['HTTP_REFERER']);
}

function get_user() {
  global $login;
  return $login;
  //return $_SESSION['login'];
}

function is_auth() {
  return isset($_SESSION['login']);
}
