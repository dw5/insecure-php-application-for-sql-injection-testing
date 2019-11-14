<?php
    require 'includes/common.php';
    
    if (!isset($_SESSION['id'])) {
        header('Location: ./');
        exit;
    }

    $con = connect();
    $sessionId = $_SESSION['id'];
    $getUser = mysqli_query($con, 'SELECT * FROM users WHERE id = ' . $sessionId);
    $user = mysqli_fetch_assoc($getUser);

    if (empty($user)) {
        session_destroy();

        header('Location: ./');
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
        <h1>Hello, <?php echo $user['username']; ?></h1>
        <?php
            if ($user['is_admin'] == 1) {
                ?>
                <div class="alert alert-info">
                    You are an admin!
                </div>
                <?php
            }
            else {
                ?>
                <div class="alert alert-warning">
                    You suck!
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>