<?php

require __DIR__ . '/../autoload.php';

$about = new \App\Classes\Models\About();

if (!empty($_POST)) {
    if (isset($_POST['header']) && isset($_POST['text'])) {
        $about->setData($_POST['header'], $_POST['text']);
    }
}
header('Location: /obychenie/yrok-9/admin/about.php');
die();