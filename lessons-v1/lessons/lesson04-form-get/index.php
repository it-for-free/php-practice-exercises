<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Сравнение чисел через форму</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17707">[Урок 4 на сайте]</a></p>
  <h1>Сравнение чисел</h1>
  <form action="" method="get">
    <p>Число A: <input type="text" name="a"></p>
    <p>Число B: <input type="text" name="b"></p>
    <p><button type="submit">Сравнить</button></p>
  </form>
<?php
if (isset($_GET['a'], $_GET['b'])
    && $_GET['a'] !== '' && $_GET['b'] !== '') {
    $a = $_GET['a'];
    $b = $_GET['b'];
    if ($a > $b) {
        echo '<p>' . $a . ' больше ' . $b . '</p>';
    } elseif ($a < $b) {
        echo '<p>' . $a . ' меньше ' . $b . '</p>';
    } else {
        echo '<p>' . $a . ' равно ' . $b . '</p>';
    }
}
?>
</body>
</html>
