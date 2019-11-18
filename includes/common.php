<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);

    require 'config.php';

    function connect()
    {
        return mysqli_connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
    }

    function text($text = '')
    {
        header('Content-Type: text/plain');
        echo $text;
        exit;
    }

    session_start();