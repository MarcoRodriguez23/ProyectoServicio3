<?php

    function conectarDB() : mysqli {
        $hostname="localhost";
        $username="root";
        $password="";
        $database="";
        $db= new mysqli($hostname,$username,$password,$database);

        if(!$db){
            echo "No se conecto";
            exit;
        }
        return $db;
    }