<?php

    $host = "localhost";
    $dbname = "rulemiravelf";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    function exeQuery($query)
    {

        global $connection;

        $result = $connection->query($query)->fetchAll();

        return $result;
        
    }