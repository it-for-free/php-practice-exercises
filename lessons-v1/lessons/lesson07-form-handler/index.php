<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Форма и обработчик</title>
</head>
<body>
  <p><a href="https://fkn.ktu10.com/?q=node/17710">[Урок 7 на сайте]</a></p>
  <h1>Оставить сообщение</h1>
<?php if (isset($_GET['sent'])) { ?>
  <p><strong>Спасибо! Сообщение получено.</strong></p>
<?php } ?>
  <form action="handler.php" method="post">
    <p>Имя:
      <input type="text" name="name">
    </p>
    <p>Сообщение:<br>
      <textarea name="text" rows="5" cols="40"></textarea>
    </p>
    <p><button type="submit">Отправить</button></p>
  </form>
</body>
</html>
