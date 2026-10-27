<?php
session_start();

// уже вошли? - сразу на закрытую страницу
if (isset($_SESSION['user'])) {
    header('Location: secret.php');
    exit;
}

$login = '';
$password = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if ($login === 'admin' && $password === '12345') {
        $_SESSION['user'] = $login;
        header('Location: secret.php');
        exit;
    }
    $error = 'Неверный логин или пароль.';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Вход</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17721">[Урок 11 на сайте]</a></p>
  <h1>Вход</h1>
<?php if ($error !== '') { ?>
  <p><?php echo htmlspecialchars($error); ?></p>
<?php } ?>
  <form action="" method="post">
    <p>Логин:
      <input type="text" name="login"
             value="<?php echo htmlspecialchars($login); ?>">
    </p>
    <p>Пароль:
      <input type="password" name="password">
    </p>
    <p><button type="submit">Войти</button></p>
  </form>
</body>
</html>
