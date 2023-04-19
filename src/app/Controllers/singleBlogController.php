<?php
// this page is used to display a single blog
include_once("../assets/config.php");
session_start();
$id = $_GET['blog_id'];
$blog = Blog::find_by_sql("SELECT * from blogs where blog_id = $id");
$_SESSION['blog'] = array();

foreach ($blog as $key => $value) {
    $_SESSION['blog']['name'] = $blog[$key]->blog_name;
    $_SESSION['blog']['image'] = $blog[$key]->blog_image;
    $_SESSION['blog']['desc'] = $blog[$key]->blog_detail;
}
header("location:../Views/singleBlog.php?blog_id=" . $id . "");
