<?php
session_start();
include_once("../assets/config.php");
include_once("navbar.php");
?>
<html>
<!-- this page displays a single blog -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container m-5 p-5">
        <div class="row">
            <div class="col-lg-5">
                <img src="<?php echo $_SESSION['blog']['image'] ?>" alt="Image not found!">
            </div>
            <div class="col-lg-5">
                <div class="col">
                    <h4><?php echo $_SESSION['blog']['name'] ?></h4>
                </div>
                <div class="col">
                    <p><?php echo $_SESSION['blog']['desc'] ?></p>
                </div>
                <div class="col">
                    <?php
                    $id = $_GET['blog_id'];
                    echo "<a href='../Controllers/likeController.php?blog_id=" . $id . "&user_id=" . $_COOKIE['user'] . "&page=singleBlog' class='btn btn-light py-2 icon-hover'><i class='fas fa-heart fa-lg ";
                    $result = Like::find_by_user_id_and_blog_id($_COOKIE['user'], $id);
                    if (!empty($result)) {
                        echo "text-danger";
                    } else {
                        echo "text-secondary";
                    }
                    echo " px-1'></i></a>";
                    ?>
</body>

</html>