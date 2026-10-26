<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Сравнение чисел</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17705">[Урок 3 на сайте]</a></p>
  <h1>Сравнение чисел</h1>
<?php
if (isset($_GET['a'], $_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    if ($a > $b) {
        echo '<p>' . $a . ' больше ' . $b . '</p>';
    } elseif ($a < $b) {
        echo '<p>' . $a . ' меньше ' . $b . '</p>';
    } else {
        echo '<p>' . $a . ' равно ' . $b . '</p>';
    }
} else {
    echo '<p>Передайте два числа, например: ?a=5&b=7</p>';
}
?>
</body>
</html>
