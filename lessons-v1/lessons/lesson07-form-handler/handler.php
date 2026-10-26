<?php
// handler.php - принимает форму и возвращает на страницу
$isPosted = $_SERVER['REQUEST_METHOD'] === 'POST';
$name = '';
$text = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['text'])) {
    $text = $_POST['text'];
}
if (!$isPosted || $name === '' || $text === '') {
    // данных нет или они пустые - просто возвращаемся к форме
    header('Location: index.php');
    exit;
}

// здесь данные валидны: в реальном приложении их
// сохранили бы в базу или отправили на почту
header('Location: index.php?sent=1');
exit;
