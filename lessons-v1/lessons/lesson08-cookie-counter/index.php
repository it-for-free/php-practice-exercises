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
  <h1>Счётчик посещений</h1>
  <p>Количество ваших визитов: <?php echo $visits; ?></p>
</body>
</html>
