<?php
session_start();

if (isset($_SESSION['visits'])) {
    $_SESSION['visits'] = $_SESSION['visits'] + 1;
} else {
    $_SESSION['visits'] = 1;
}
$visits = $_SESSION['visits'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Счётчик в сессии</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17715">[Урок 9 на сайте]</a></p>
  <h1>Счётчик в сессии</h1>
  <p>Вы открыли страниц в этой сессии: <?php echo $visits; ?></p>
</body>
</html>
