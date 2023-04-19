<?php
// this file is used to take the values before editting
session_start();
include_once("../assets/config.php");
$url = $_SERVER['REQUEST_URI'];
$arr = explode('?', $url);
$id = $arr[1];
$blog = Blog::find_by_sql("SELECT * from blogs where blog_id = $id");
$_SESSION['edit'] = array();

foreach ($blog as $key => $value) {
    $_SESSION['edit']['name'] = $blog[$key]->blog_name;
    $_SESSION['edit']['image'] = $blog[$key]->blog_image;
    $_SESSION['edit']['desc'] = $blog[$key]->blog_detail;
    $_SESSION['edit']['id'] = $blog[$key]->blog_id;
}
header("location:../Views/createBlog.php?");
