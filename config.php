<?php

ini_set('display_errors', 1);

require_once(__DIR__ . '/vendor/autoload.php');

define('APP_ID', '181964595702581');
define('APP_SECRET', '0929ea7df6072644c19256078ccba7ac');
define('APP_VERSION', 'v2.10');

define('DSN', 'mysql:host=localhost;dbname=dotinstall_fb_connect_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'gSBUdBAm');

define('CALLBACK_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/login.php');

session_start();

require_once(__DIR__ . '/functions.php');

?>