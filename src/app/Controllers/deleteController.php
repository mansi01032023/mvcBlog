<?php
// this file is deleting a blog
include_once("../assets/config.php");
Blog::find_by_blog_id($_GET['blog_id'])->delete();
if ($_GET['page'] == "myBlogs")
    header("location:../Views/myBlogs.php");
else
    header("location:../Views/admin.php");
