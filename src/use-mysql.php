<?php

$dsn = 'mysql:host=' . '127.0.0.1';
$user = 'root';
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

$dbh = new PDO($dsn, $user, $password);

$sql = "SELECT version();";

foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}
