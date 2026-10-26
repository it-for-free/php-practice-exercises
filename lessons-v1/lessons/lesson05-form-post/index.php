<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Сравнение чисел: POST</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17708">[Урок 5 на сайте]</a></p>
  <h1>Сравнение чисел</h1>
  <form action="" method="post">
    <p>Число A: <input type="text" name="a"></p>
    <p>Число B: <input type="text" name="b"></p>
    <p><button type="submit">Сравнить</button></p>
  </form>
<?php
if (isset($_POST['a'], $_POST['b'])
    && $_POST['a'] !== '' && $_POST['b'] !== '') {
    $a = $_POST['a'];
    $b = $_POST['b'];
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
