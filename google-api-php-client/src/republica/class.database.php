<?php

function conecta_SYNC() {
    $userName = "carrillo_db";
    $password = "AnyaCarrill0";
    $dbName = "carrillo_dbaurora";
    $server = "localhost";
    $charset = 'utf8';
    $dsn = "mysql:host=$server;dbname=$dbName;charset=$charset";
    try {
        $db = new PDO($dsn, $userName, $password);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        print "Error!: " . $userName . "<br/>";
        print "Error!: " . $password . "<br/>";
        die();
    }
    return $db;
}

?>
