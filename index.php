<?php

require 'router.php';
require 'Database.php';
require 'functions.php';


$config = require 'config.php';
$db = new Database($config['database']);


$db->query();






