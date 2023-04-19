<?php
session_start();
include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- frontend for creating a blog -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.
    0-alpha3/dist/css/bootstrap.min.css
    " rel="styleshe
    et" integrity="sha384-KK94CHFLLe+nY
    2dmCWGMq9
    1rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+
    dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3 class="text-center">Create a Blog</h3>
    <div class="container form-horizontal">
        <form action="../Controllers/createBlogController.php" method="post">
            <div class="row form-group text-center">
                <label class="col-md-2 control-label my-2 mx-0" for="blog_name"><em>BLOG NAME</em></label>
                <div class="col-md-4 text-center m-1">
                    <input id="blog_name" name="blog_name" placeholder="Name" class="form-control input-md" required="" type="text" value="<?php if (isset($_SESSION['edit'])) {
                                                                                                                                                echo $_SESSION['edit']['name'];
                                                                                                                                            } ?>">
                </div>
            </div>
            <div class="row form-group text-center">
                <label class="col-md-2 control-label my-2 mx-0" for="blog_detail"><em>BLOG DETAIL</em></label>
                <div class="col-md-4 text-center m-1">
                    <textarea id="blog_detail" name="blog_detail" placeholder="Description" class="form-control input-md" required="" type="text"><?php if (isset($_SESSION['edit'])) {
                                                                                                                                                        echo $_SESSION['edit']['desc'];
                                                                                                                                                    } ?></textarea>
                </div>
            </div>
            <div class="row form-group text-center">
                <label class="col-md-2 control-label my-2 mx-0" for="blog_image"><em>BLOG IMAGE</em></label>
                <div class="col-md-4 text-center m-1">
                    <input id="blog_image" name="blog_image" placeholder="URL of image" class="form-control input-md" required="" type="url" value="<?php if (isset($_SESSION['edit'])) {
                                                                                                                                                        echo $_SESSION['edit']['image'];
                                                                                                                                                    } ?>"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mx-5 my-5" value="<?php if (isset($_SESSION['edit'])) {
                                                                                $_SESSION['new'] = "update";
                                                                                echo "Update";
                                                                            } else {
                                                                                $_SESSION['new'] = "create";
                                                                                echo "Create";
                                                                            } ?>" id="create" />
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/boo
tstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz
1HIcje39Wm4jD
Kdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>