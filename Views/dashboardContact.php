<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "components/navbar.php" ?>

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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
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
</head>

<body>



    <!-- Header -->


    <!-- Actions -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/Dashboard/Fetch" class="btn btn-dark btn-block">
                        Article
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="/Category/Fetch/" class="btn btn-dark btn-block">
                        CATEGORY
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="/User/Fetch/" class="btn btn-dark btn-block">
                        <i class="fas fa-plus"></i> User
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="/Comment/Fetch/" class="btn btn-dark btn-block">
                        Comments
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/Contacts/Fetch/" class="btn btn-dark btn-block">
                        Contacts
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->

    <section id="posts">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Users</h4>
                        </div>

                        <table class="table table-striped">

                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>nom </th>
                                    <th>email </th>
                                    <th>subject</th>
                                    <th>date</th>
                                    <th> Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($Contacts)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["nom"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["sujet"]; ?></td>
                                        <td><?php echo $row["message"]; ?></td>
                                        <td><?php echo $row["date_ajout"]; ?></td>

                                        <td>
                                            <a href="/Contacts/DeleteContact/<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                                        </td>

                                        <td>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
        CKEDITOR.replace('editor1');
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>