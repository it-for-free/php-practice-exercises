<?php
// logout.php - завершаем сессию и возвращаем на вход
session_start();

$_SESSION = [];
session_destroy();

header('Location: login.php');
exit;
