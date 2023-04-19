
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <!-- header section -->
        <div class="container">
            <header class="header mt-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="col-2 text-start">
                        <i class="fa fa-book-open fa-lg" style="color:brown;"></i>
                        <strong>ABC</strong> Blogs
                    </div>
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link text-primary" href="homePage.php">Home Page</a>
                            <a class="nav-item nav-link text-primary" href="../Controllers/myBlogsController.php">My Blogs</a>
                            <a class="nav-item nav-link text-primary" href="../Controllers/blogController.php">Create Blog</a>
                            <a class="nav-item nav-link text-primary" href="<?php if(!isset($_COOKIE['user'])) echo "registration.php"; else echo "homePage.php"; ?>">Register</a>
                            <a class="nav-item nav-link text-primary" href="<?php if(!isset($_COOKIE['user'])) echo "login.php"; else echo "homePage.php"; ?>">Sign in<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link text-danger" href="<?php if(isset($_COOKIE['user'])) echo "../Controllers/logoutController.php"; else echo "homePage.php"; ?>">Sign out</a>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
</body>

</html>