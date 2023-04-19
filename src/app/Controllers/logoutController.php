<?php
// this file is signing out a user
setcookie('user', $result->user_id, time() - (86400 * 30), "/");
header("location:../Views/homePage.php");
