<!-- Services Start -->
<div class="container-fluid bg-light py-7 px-5 pt-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Construction Services</h1>
    </div>
    <div class="row g-5">
        <?php
        while ($row = mysqli_fetch_array($_SESSION["Categories"])) {
        ?>
            <div class="col-lg-4 col-md-6 pb-4">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid catimg" src=<?php echo "/img/category/".$row["image"]; ?> alt="">
                    <div class="service-icon bg-white">
                        <img class="icon" src=<?php echo "/img/icon/".$row["icon"]; ?> alt="">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3"><?php echo $row["nom"]; ?></h4>
                        <p><?php echo $row["description"]?></p>
                        <a class="btn text-primary" href=<?php echo "Explore/FetchByCategory/".$row["id"]; ?>>Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<!-- Services End -->