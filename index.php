<?php

require 'router.php';
require 'Database.php';
require 'functions.php';

$config = require 'config.php';
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if(strlen($_POST['name']) === 0 || strlen($_POST['name']) > 80)
    {
        $errors['name'] = 'A name is required, and should not exceed 80 characters';
    }

    if (empty($errors))
    {
        $db->nameQuery();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if(strlen($_POST['comment']) === 0 || strlen($_POST['comment']) > 255)
    {
        $errors['comment'] = 'A comment is required, and should not exceed 255 characters';
    }

    if (empty($errors))
    {
        $db->commentQuery();
    }
}










