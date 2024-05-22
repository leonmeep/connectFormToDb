<?php

require 'router.php';
require 'Database.php';
require 'functions.php';

//new db instance
$config = require 'config.php';
$db = new Database($config['database']);


$db->query();






