<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Сравнение чисел: аккуратная форма</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17709">[Урок 6 на сайте]</a></p>
  <h1>Сравнение чисел</h1>
<?php
$isPosted = $_SERVER['REQUEST_METHOD'] === 'POST';
$a = '';
$b = '';
if (isset($_POST['a'])) {
    $a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $b = $_POST['b'];
}
$isValid = $isPosted && is_numeric($a) && is_numeric($b);
?>
  <form action="" method="post">
    <p>Число A:
      <input type="text" name="a"
             value="<?php echo htmlspecialchars($a); ?>">
    </p>
    <p>Число B:
      <input type="text" name="b"
             value="<?php echo htmlspecialchars($b); ?>">
    </p>
    <p><button type="submit">Сравнить</button></p>
  </form>
<?php
if ($isPosted && !$isValid) {
    echo '<p>Заполните оба поля числами.</p>';
}
if ($isValid) {
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
