<?php
// index.php - единая точка входа сайта:
//   index.php                   - главная
//   index.php?page=about        - «О сайте»
//   index.php?page=contacts     - «Контакты»
//   index.php?page=что-угодно   - страница 404

// какой страницы просит посетитель?
$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

// выбираем, какой файл страницы подключить
if ($page === 'about') {
    $title = 'О сайте';
    $contentFile = 'pages/about.php';
} elseif ($page === 'contacts') {
    $title = 'Контакты';
    $contentFile = 'pages/contacts.php';
} elseif ($page === '') {
    // параметра нет - показываем главную
    $title = 'Главная';
    $contentFile = 'pages/home.php';
} else {
    // имя незнакомое - такой страницы нет
    http_response_code(404);
    $title = 'Страница не найдена';
    $contentFile = 'pages/404.php';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Мой сайт - <?php echo $title; ?></title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17732">[Урок 12 на сайте]</a></p>
  <h1>Мой сайт</h1>
  <ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="index.php?page=about">О сайте</a></li>
    <li><a href="index.php?page=contacts">Контакты</a></li>
  </ul>
  <hr>
<?php require $contentFile; ?>
  <hr>
  <p>(c) Мой сайт, <?php echo date('Y'); ?></p>
</body>
</html>
