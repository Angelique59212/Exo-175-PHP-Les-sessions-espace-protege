<?php
session_start();

if (isset($_POST['submit']) && isset($_POST['passwd'])) {
    if ($_POST['passwd'] === "userpasswd") {
        $_SESSION['error'] = 'valid';
        header('Location: protected-content.php');
    }
    else {
        $_SESSION['error'] = "error";
        header('Location: index.php');
    }
}

