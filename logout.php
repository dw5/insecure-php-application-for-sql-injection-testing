<?php
    require 'includes/common.php';

    session_destroy();

    header('Location: ./');
    exit;
