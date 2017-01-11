<?php

require __DIR__ . '/../autoload.php';

$guestBook = new \App\Classes\Models\GuestBook();

$view = new \App\Classes\View();

$view->assign('record', $guestBook->getData());
$view->display(__DIR__ . '/../template/guestBook.php');