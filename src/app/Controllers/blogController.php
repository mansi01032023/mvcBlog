<?php
// this page redirects the user to home page if not logged in before creating a blog
include_once("../assets/config.php");
if (isset($_COOKIE['user'])) {
    header("location:../Views/createBlog.php");
} else {
    header("location:../Views/login.php");
}
