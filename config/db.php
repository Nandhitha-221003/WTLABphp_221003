<?php
require __DIR__ . '/../vendor/autoload.php';

// Load .env file
$env = parse_ini_file(__DIR__ . '/../.env');

$client = new MongoDB\Client($env['MONGO_URI']);

$db = $client->{$env['DB_NAME']};

$users = $db->{$env['COLLECTION_NAME']};
?>