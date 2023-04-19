<?php
// frontend for displaying homepage
include_once("navbar.php");
include_once("../assets/config.php");

$arr = Blog::find_by_sql("SELECT * FROM blogs");
echo "<div class='container-fluid mx-3 my-5 p-0'><div class='row mx-5'>";
foreach ($arr as $key => $value) {
    echo  "<div class='col-lg-3 col-md-6 col-sm-6 d-flex my-3'>
<div class='card' style='width: 18em;'>
<img src='" . $arr[$key]->blog_image . "' class='card-img-top m-auto' alt='...' style='height: 200px; width: 200px;'>
<div class='card-body'>
<h5 class='card-title'>" . $arr[$key]->blog_name . "</h5>
<p class='card-text'>" . substr($arr[$key]->blog_detail, 0, 50) . "</p>
<a href='../Controllers/singleBlogController.php?blog_id=".$arr[$key]->blog_id."' class='btn btn-primary'>Read More...</a>
<a href='../Controllers/likeController.php?blog_id=".$arr[$key]->blog_id."&user_id=".$_COOKIE['user']."&page=homePage' class='btn btn-light py-2 icon-hover'><i class='fas fa-heart fa-lg ";
    $result = Like::find_by_user_id_and_blog_id($_COOKIE['user'], $arr[$key]->blog_id);
    if(!empty($result)){
        echo "text-danger";
    }else{
        echo "text-secondary";
    }
echo " px-1'></i></a>
</div>
</div>
</div>";
}
echo "</div></div>";
