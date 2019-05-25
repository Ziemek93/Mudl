<?php

$configArr = array('dbName', 'host', 'user', 'password');

$configArr['dbName'] = 'mudl';
$configArr['host'] = 'localhost';
$configArr['user'] = 'root';
$configArr['password'] = '';

$dsn = 'mysql:host=' . $configArr['host'] . ';dbname=' . $configArr['dbName'] . ';charset=utf8';

function Connect()
{
    global $dsn, $configArr;

    return new PDO($dsn, $configArr['user'], $configArr['password'], [PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
