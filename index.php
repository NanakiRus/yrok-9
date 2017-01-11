<?php

require __DIR__ . '/autoload.php';

$about = new \App\Classes\Models\About();

$view = new \App\Classes\View();

$view->assign('about', $about->getData());
$view->display(__DIR__ . '/template/about.php');