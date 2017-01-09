<?php

require __DIR__ . '/../autoload.php';

$view = new \App\Classes\View();

$view->display(__DIR__ . '/../template/admin.php');