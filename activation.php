<?php
session_start();

include 'registration.php';

if (isset($_GET['token'])); {
    $token = $_GET['token'];

    $updatequery = " update customers set status = 'active' where token='$token' ";

    $query = mysqli_query($con, $updatequery);

    if ($query) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Account has been activated successfully!";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are Logged Out";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "Account has not activated!";
        header('location:signup.php');
    }
}
