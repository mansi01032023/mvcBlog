<?php
// this file is registering a user
include_once("../assets/config.php");
if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $attributes = array('user_id' => null, 'username' => $name, 'email' => $email, 'password' => $password);
    $result = User::create($attributes);
    if ($result) {
        header('location: ../Views/login.php');
    }
}
