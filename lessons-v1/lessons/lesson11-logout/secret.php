<?php
session_start();

// не вошёл? - на страницу входа
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Секретная страница</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17721">[Урок 11 на сайте]</a></p>
  <h1>Только для своих</h1>
  <p>Привет, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
  <p>Здесь мог бы быть ваш личный кабинет.</p>
  <p><a href="logout.php">Выйти</a></p>
</body>
</html>
