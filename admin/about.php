<?php

require __DIR__ . '/../autoload.php';

$about = new \App\Classes\Models\About();

$view = new \App\Classes\View();

if (!empty($_POST)) {
    if (isset($_POST['header']) && isset($_POST['text'])) {
        $about->setData($_POST['header'], $_POST['text']);
    }
}

$view->assign('about', $about->getData());
$view->display(__DIR__ . '/../template/about.php');