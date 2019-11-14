<?php
    require 'includes/common.php';

    if (isset($_SESSION['id'])) {
        header('Location: ./user.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>
    <div class="container">
        <form action="./login.php" method="post">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="alexthomassen">
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="********">
            </div>

            <button class="btn btn-success">Log in</button>
        </form>
    </div>
</body>
</html>