<!DOCTYPE html>
<html lang="en">
<?php $row = mysqli_fetch_array($Categories); ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="/css/main.css" rel="stylesheet">
    <title>Bootstap Theme</title>
</head>

<body>

    <?php require "components/navbar.php" ?>
    <div class="container">
        <a href="index.html" class="navbar-brand">Blogen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link" href="index.html">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="posts.html">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="categories.html">Categories</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="users.html">Users</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="fas fa-user"></i> Welcome Sam
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a class="dropdown-item" href="settings.html">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="fas fa-user-times"></i> Logout
                    </a>
                </li>
            </ul>

        </div>
    </div>
    </nav>

    <!-- Header -->

    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Post One</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Actions -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/Dashboard" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <input type="submit" form="addArticle" class="btn btn-primary btn-block" Value="Add Article">
                </div>
            </div>
        </div>
    </section>

    <!-- DETALIS -->

    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-body">

                            <form action="/Article/AddArticleDetails" id="addArticle" method="post">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="categorie" class="form-control">
                                        <?php
                                        foreach ($Categories as $Categorie) {
                                        ?>
                                            <option value=<?= $Categorie["id"] ?>><?= $Categorie["nom"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label for="image" class="custom-file-label">Choose File</label>
                                    </div>
                                    <small class="form-text text-muted">Max Size 3mb</small>
                                </div>

                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="contenu" class="form-control"></textarea>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy; <span id="year"></span>
                        Blogen
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script>
        function submit() {
            let form = document.getElementById("form2");
            form.submit();
            alert("Data stored in database!");
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
        CKEDITOR.replace('contenu');
    </script>
</body>

</html>