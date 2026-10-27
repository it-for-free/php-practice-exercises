<?php
$visits = 0;
if (isset($_COOKIE['visits'])) {
    $visits = (int) $_COOKIE['visits'];
}
$visits = $visits + 1;
setcookie('visits', (string) $visits);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Счётчик посещений</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17713">[Урок 8 на сайте]</a></p>
  <h1>Счётчик посещений</h1>
  <p>Количество ваших визитов: <?php echo $visits; ?></p>
</body>
</html>
