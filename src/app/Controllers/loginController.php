<?php
// this file is logging in a user
include_once("../assets/config.php");
if (isset($_GET)) {
    $result = User::find_by_email_and_password($_GET['emailLogin'], $_GET['passwordLogin']);
    if ($result->email && $result->password) {
        setcookie('user', $result->user_id, time() + (86400 * 30), "/");
        header("location:../Views/homePage.php");
    } else {
        header("location:../Views/registration.php");
    }
}
