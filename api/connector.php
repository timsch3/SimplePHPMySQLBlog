<?php

    function getConnection() {
        
        $host = 'hostname';
        $username = 'username';
        $password = '*****';
        $db = 'database';

        return mysqli_connect($host, $username, $password, $db);
    }
?>