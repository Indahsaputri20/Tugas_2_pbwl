<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
//session_start();

// Url -
define("URL", "http://localhost/SI3/pbwl-tugas2-indah");
define("AST", URL . "/layouts/assets");

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT. "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();