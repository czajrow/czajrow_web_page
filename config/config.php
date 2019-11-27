<?php
$pagetitle = array(
    'title' => 'Kreolia',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
    'title' => 'Simple Website',
    'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'company' => 'Fundacja na Rzecz Wspierania Rozwoju Kreatywności oraz Rozwoju Twórczości Dzieci, Młodzieży i Dorosłych'
);

$pages = array(
    '/' => array('file' => 'home', 'text' => 'Home'),
    'introduction' => array('file' => 'introduction', 'text' => 'Introduction'),
    'contact' => array('file' => 'contact', 'text' => 'Contact'),
    'articles' => array('file' => 'articles', 'text' => 'Articles'),
    'table' => array('file' => 'table', 'text' => 'Table')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>
