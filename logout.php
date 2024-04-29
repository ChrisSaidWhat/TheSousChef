<?php
    session_start();

    session_unset();
    session_destroy();

    $conn = null;
    $stmt = null;

    header("Location: login.php");

?>