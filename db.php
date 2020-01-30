<?php

$host = 'localhost';
$user = 'mysql';
$pass = 'mysql';
$db = 'prouserapi';

$link = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($link, 'utf8');