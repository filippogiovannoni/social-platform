<?php


define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-social-platform");

// Connect

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection

if ($connection && $connection->connect_error) {
    echo 'Connection Failed: ' . $connection->connect_error;
}

var_dump($connection);
