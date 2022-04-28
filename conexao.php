<?php


    function connectToCarDatabase() {
        $host     = '127.0.0.1';
        $database = 'cardb';
        $user     = 'root';
        $password = 'root_Passw0rd';

        $databaseSourceName = "mysql:host=$host;dbname=$database;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $connection = new PDO($databaseSourceName, $user, $password, $options);

            if ($connection) {
                echo "Conectado ao banco de dados $database com sucesso!"."<br />";
                return $connection;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

?>
