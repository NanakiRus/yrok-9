<?php

require __DIR__ . '/autoload.php';

$path = __DIR__ . '/upload';

$gallery = new \App\Classes\Gallery($path);

$view = new \App\Classes\View();

$view->assign('gallery', $gallery->getImages());
$view->display(__DIR__ . '/template/gallery.php');