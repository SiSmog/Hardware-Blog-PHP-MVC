<?php
$article=mysqli_fetch_array($Article);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WEBUILD -  Construction Company Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    

<?php include "components/navbar.php"?>



    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Blog Detail</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Blog Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid  rounded mb-5" src=<?php echo "/img/article/".$article["image"]?> alt="">
                    <h1 class="text-uppercase mb-4"><?php echo $article["titre"]?></h1>
                    <p><?php echo $article["contenu"]?></p>

                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4"><?php echo mysqli_num_rows($CommentsByArticle);?> Comments</h3>
                    <?php
                    while($row = mysqli_fetch_array($CommentsByArticle)){?> 
                            <div class="d-flex mb-4">
                                <img src=<?php echo "/img/". $row["image"]?> class="img-fluid" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6><a href=""><?php echo $row["pseudo_utilisateur"]?></a> <small><i><?php echo $row["date_ajout"]?></i></small></h6>
                                    <p><?php echo $row["contenu"]?></p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light p-5">
                    <h3 class="text-uppercase mb-4">Leave a comment</h3>
                    <form method="POST" action=<?php echo "/Comment/Add/". $article["id"]?>>
                        <div class="row g-3">
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment" name="contenu"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>