<?php
include_once("../assets/config.php");
?>
<html>
<!-- head section starts here -->
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<div class="container">
    <h3>Top 5 Blogs</h3>
    <?php
    echo "<table style='width: 100%; border: 1px solid gray;'>
        <thead style='border: 1px solid gray;'>
            <tr>
                <th style='border: 1px solid gray; padding: 5px; '>Blog ID</th>
                <th style='border: 1px solid gray; padding: 5px; '>User ID</th>
                <th style='border: 1px solid gray; padding: 5px; '>Blog Name</th>
                <th style='border: 1px solid gray; padding: 5px; '>Blog Detail</th>
                <th style='border: 1px solid gray; padding: 5px; '>Likes</th>
                <th style='border: 1px solid gray; padding: 5px; '>Delete</th>
            </tr>
        </thead>
        <tbody>";
    $arr = Blog::find_by_sql("SELECT * FROM blogs ORDER BY likes desc limit 5");
    foreach ($arr as $key => $value) {
        echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_id . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->user_id . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_name . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_detail . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->likes . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><a href='../Controllers/deleteController.php?blog_id=" . $arr[$key]->blog_id . "&page=admin'><button>Delete</button></a></td></tr>";
    }
    echo "</tbody></table>";
    ?>
    <br><br>
    <hr>
    <h3>All Blogs</h3>
    <?php
    echo "<table style='width: 100%; border: 1px solid gray;'>
        <thead style='border: 1px solid gray;'>
            <tr>
                <th style='border: 1px solid gray; padding: 5px; '>Blog ID</th>
                <th style='border: 1px solid gray; padding: 5px; '>User ID</th>
                <th style='border: 1px solid gray; padding: 5px; '>Blog Name</th>
                <th style='border: 1px solid gray; padding: 5px; '>Blog Detail</th>
                <th style='border: 1px solid gray; padding: 5px; '>Likes</th>
                <th style='border: 1px solid gray; padding: 5px; '>Delete</th>
            </tr>
        </thead>
        <tbody>";
    $arr = Blog::find_by_sql("SELECT * FROM blogs");
    foreach ($arr as $key => $value) {
        echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_id . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->user_id . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_name . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->blog_detail . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $arr[$key]->likes . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><a href='../Controllers/deleteController.php?blog_id=" . $arr[$key]->blog_id . "&page=admin'><button>Delete</button></a></td></tr>";
    }
    echo "</tbody></table>";
    ?>
</div>

</html>