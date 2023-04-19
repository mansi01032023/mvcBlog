<?php
// this file is used to like a blog
include_once("../assets/config.php");
if (isset($_COOKIE['user'])) {
    $blog_id = $_GET['blog_id'];
    $user_id = $_GET['user_id'];
    $result = Like::find_by_user_id_and_blog_id($user_id, $blog_id);
    $blog = Blog::find_by_blog_id($blog_id);
    $like_id = $result->like_id;
    if (empty($result)) {
        $attributes = array('user_id' => $user_id, 'blog_id' => $blog_id);
        $blog->likes += 1;
        $blog->save();
        $result = Like::create($attributes);
        if ($_GET['page'] == "myBlogs") {
            header("location:../Views/myBlogs.php");
        } else if ($_GET['page'] == "homePage") {
            header("location:../Views/homePage.php");
        } else {
            header("location:../Views/singleBlog.php");
        }
    } else {
        $blog->likes -= 1;
        $blog->save();
        Like::find_by_like_id($like_id)->delete();
        if ($_GET['page'] == "myBlogs") {
            header("location:../Views/myBlogs.php");
        } else if ($_GET['page'] == "homePage") {
            header("location:../Views/homePage.php");
        } else {
            header("location:../Views/singleBlog.php");
        }
    }
} else {
    header("location:../Views/login.php");
}
