<?php

require __DIR__ . '/../autoload.php';

$path = __DIR__ . '/../upload';

$gallery = new \App\Classes\Models\Gallery($path);

$view = new \App\Classes\View();

$view->assign('gallery', $gallery->getImages());
$view->display(__DIR__ . '/../template/admin/gallery.php');