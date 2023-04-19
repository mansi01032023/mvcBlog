<?php
// this file edits and creates a blog
session_start();
include_once("../assets/config.php");
if ($_SESSION['new'] == "create") {
    if (isset($_POST)) {
        $name = $_POST['blog_name'];
        $desc = $_POST['blog_detail'];
        $image = $_POST['blog_image'];
        $attributes = array('blog_id' => null, 'user_id' => $_COOKIE['user'], 'blog_name' => $name, 'blog_detail' => $desc, 'blog_image' => $image, 'likes' => 0);
        $result = Blog::create($attributes);
        if ($result) {
            header('location: ../Views/homePage.php');
        }
    }
} else {
    if (isset($_POST)) {
        $name = $_POST['blog_name'];
        $desc = $_POST['blog_detail'];
        $id = $_SESSION['edit']['id'];
        $image = $_POST['blog_image'];
        $arr = Blog::find_by_blog_id($id);
        $arr->blog_name = $name;
        $arr->blog_detail = $desc;
        $arr->blog_image = $image;
        $arr->save();
        if ($arr) {
            $_SESSION['new'] == "create";
            unset($_SESSION['edit']);
            header('location: ../Views/homePage.php');
        }
    }
}
