<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/install/config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Подключение не удалось! Проверьте данные для подключения к базе данных');
}




