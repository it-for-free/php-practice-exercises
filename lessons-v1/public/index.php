<?php

echo '<p>Уроки PHP (lessons-v1) работают! Версия PHP: ' . PHP_VERSION . '</p>';

// Список уроков - пополняем вручную по мере добавления уроков
echo '<ul>';
echo '<li><a href="/lessons/lesson01-html-date/">Урок 1: PHP отдаёт HTML (текущая дата)</a></li>';
echo '<li><a href="/lessons/lesson02-get-name/">Урок 2: GET-параметры (приветствие по имени)</a></li>';
echo '<li><a href="/lessons/lesson03-compare-numbers/">Урок 3: сравнение двух чисел из GET</a></li>';
echo '<li><a href="/lessons/lesson04-form-get/">Урок 4: форма с методом GET</a></li>';
echo '<li><a href="/lessons/lesson05-form-post/">Урок 5: форма с методом POST</a></li>';
echo '<li><a href="/lessons/lesson06-form-sent/">Урок 6: как узнать, что форму отправили</a></li>';
echo '<li><a href="/lessons/lesson07-form-handler/">Урок 7: форма и обработчик в разных файлах</a></li>';
echo '<li><a href="/lessons/lesson08-cookie-counter/">Урок 8: куки (счётчик посещений)</a></li>';
echo '<li><a href="/lessons/lesson09-sessions/">Урок 9: сессии (счётчик на сервере)</a></li>';
echo '<li><a href="/lessons/lesson10-auth/login.php">Урок 10: простейшая авторизация</a></li>';
echo '<li><a href="/lessons/lesson11-logout/login.php">Урок 11: выход (logout и session_destroy)</a></li>';
echo '</ul>';

// Подсказка: как запустить отладку урока из браузера
echo '<p>Отладка (xdebug): добавьте к адресу урока параметр '
    . '<code>XDEBUG_SESSION_START=netbeans-xdebug</code> '
    . '(например, <code>/lessons/lesson03-compare-numbers/'
    . '?XDEBUG_SESSION_START=netbeans-xdebug</code>; если параметры '
    . 'уже есть — через <code>&amp;</code>). Отладчик должен слушать '
    . 'порт 9003, подробности: <code>make about</code> и '
    . '<a href="https://fkn.ktu10.com/?q=node/17404">наш урок об отладке</a>.</p>';
