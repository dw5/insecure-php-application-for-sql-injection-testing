<?php
    require 'includes/common.php';

    if (isset($_SESSION['id'])) {
        header('Location: ./user.php');
        exit;
    }

    if (!isset($_REQUEST['username'], $_REQUEST['password'])) {
        header('Location: ./');
        exit;
    }
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $con = connect();
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password';";

    $getUser = mysqli_query($con, $sql);

    if (!$getUser) {
        header('Location: ./');
        exit;
    }

    $user = mysqli_fetch_assoc($getUser);

    $_SESSION['id'] = $user['id'];
    header('Location: ./');
    exit;
?>