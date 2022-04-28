<?php
    function connectToDoListDatabase() {
        $host     = '127.0.0.1';
        $database = 'taskdb';
        $user     = 'root';
        $password = 'root_Passw0rd';

        $databaseSourceName = "mysql:host=$host;dbname=$database;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $connection = new PDO($databaseSourceName, $user, $password, $options);

            if ($connection) {
                return $connection;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>
