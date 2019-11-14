<?php
    require 'includes/common.php';

    if (isset($_SESSION['id'])) {
        header('Location: ./user.php');
        exit;
    }

    if (!isset($_POST['username'], $_POST['password'])) {
        header('Location: ./');
        exit;
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = connect();
    $getUser = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password';");
    $user = mysqli_fetch_assoc($getUser);

    $_SESSION['id'] = $user['id'];
    header('Location: ./user.php');
    exit;
?>