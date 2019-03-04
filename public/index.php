<!DOCTYPE html>
<?php
require_once __DIR__ . '/../config/config.php';

$sql = "SELECT * FROM `img` ORDER BY `views` DESC";
$imgArr = getAssocResult($sql);
$images_html = '';

foreach ($imgArr as $img) {
    if (is_file(CLIENT_DIR . 'img/' . $img['src'])) {}
    $images_html .= render(TEMPLATES_DIR . '/image.tpl.html', $img);
}

echo render(TEMPLATES_DIR . '/index.tpl.html', [
    'title' => 'Gallery',
    'h1' => 'Gallery',
    'content' => $images_html
]);