<?php
    require 'config.php';

    function connect()
    {
        return mysqli_connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
    }

    session_start();