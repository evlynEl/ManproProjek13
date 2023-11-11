<?php
session_start();

if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    unset($_SESSION['user_type']);
    session_destroy();
} else {
    header("Location: login.php");
    exit();
}
?>
