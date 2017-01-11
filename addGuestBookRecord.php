<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['author']) && isset($_POST['text'])) {
    $guest = new \App\Classes\Models\GuestBook();
    $guest->addRecord($_POST['author'], $_POST['text']);
}
header('Location: /obychenie/yrok-9/guestBook.php');
die();