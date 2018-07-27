<?php
require 'vendor/autoload.php';
// connect to mongodb
$m = new MongoDB\Client("mongodb://localhost:27017");

// select a database
$db = $m->project;
date_default_timezone_set("Asia/Kolkata");
?>