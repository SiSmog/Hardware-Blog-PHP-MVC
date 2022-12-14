<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WEBUILD - Construction Company Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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



    <?php include "components/navbar.php" ?>



    <!-- Page Header Start -->
    <div class="container-fluid page-header-explore">
        <h1 class="display-3 text-uppercase text-white mb-3">Explore</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Explore</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4"><span>Latest Articles About </span><span class="text-primary"><?php echo mysqli_fetch_array($Category)["nom"] ?></span></h1>
        </div>
        <div class="row g-5">




            <?php
            while ($row = mysqli_fetch_array($ArticlesByCategory)) {
            ?>
                <div class="col-lg-4 col-md-6 ">
                    <div class="bg-light">
                        <img class="img-fluid cardimg" src=<?php echo "/img/article/" . $row["image"]; ?> alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-2" src=<?php echo "/img/user/" . $row["userimage"]; ?> width="35" height="35" alt="">
                                    <span><?php echo $row["pseudo_utilisateur"]; ?></span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $row["date_de_modification"]; ?></span>
                                </div>
                            </div>
                            <h4 class="text-uppercase mb-3"><?php echo $row["titre"]; ?></h4>
                            <a class="text-uppercase fw-bold" href=<?php echo "/Article/Fetch/" . $row["id"] ?>>Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Blog End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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