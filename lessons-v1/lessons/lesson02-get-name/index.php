<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Привет по имени</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17704">[Урок 2 на сайте]</a></p>
  <h1>Привет!</h1>
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo '<p>Привет, ' . $name . '!</p>';
} else {
    echo '<p>Привет, незнакомец!</p>';
}
?>
</body>
</html>
