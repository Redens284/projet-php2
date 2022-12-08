<?php

if(!defined('DUMP')) {
    define('DUMP', true);
}


define('URL_BASE', "http://localhost/projet_bts_php");


$infoBdd = array(
    'interface' => 'pdo',
    'type'   => 'mysql',
    'host'   => 'localhost',
    'port'   =>  3306,
    'charset' => 'UTF8',
    'dbname' => 'projet_bts_php',
    'user'   => 'root',
    'pass'   => '',
);
require_once 'globalConfig.php';
