<?php

$baseDir = dirname(__DIR__);

require_once('Database.php');

if ($_SERVER['REMOTE_ADDR'] == '::1' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
    require_once($baseDir . '/Configs/Development.php');
else
    require_once($baseDir . '/Configs/Production.php');

$conn = new Database($config['Database']['host'], $config['Database']['user'], $config['Database']['pass'], $config['Database']['name']);