<!DOCTYPE html>
<?php

require_once __DIR__ . '/../config/config.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;
//для безопасности превращаем id в число
$id = (int) $id;
$sql = "SELECT * FROM `img` WHERE `id` = $id";
$img = show($sql);
$sql = "UPDATE `img` SET `views` = `views` + 1 WHERE `id` = $id";
execQuery($sql);

$img['views'] = (string)++$img['views'];

echo render(TEMPLATES_DIR . '/index.tpl.html', [
    'title' => 'Gallery',
    'h1' => 'Gallery',
    'content' => render(TEMPLATES_DIR . '/imagePage.tpl.html', $img)
]);