<?php
header('Content-Type: text/html; charset=utf-8');
if (!file_exists('rates.ini')) {
    die();
}
$data = parse_ini_file('rates.ini', true);//обрабатывает конфигурационный файл и возвращает его настройки ввиде ассоциативного массива
foreach ($data as $k => $v) {
    echo '<option value="'.$k.'">'.$k.'</option>\n';
}