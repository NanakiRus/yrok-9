<?php

require __DIR__ . '/../autoload.php';

if (isset($_GET['id'])) {
    $guestBook = new \App\Classes\Models\GuestBook();

    $guestBook->deleteRecord($_GET['id']);
}
header('Location: /obychenie/yrok-9/admin/guestBook.php');
die();