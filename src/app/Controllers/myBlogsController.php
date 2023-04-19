<?php
// this file redirects to myblogs only if logged in
include_once("../assets/config.php");
if (isset($_COOKIE['user'])) {
    header("location:../Views/myBlogs.php");
} else {
    header("location:../Views/login.php");
}
