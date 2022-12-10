<!-- Blog Start -->





        <?php
        while ($row = mysqli_fetch_array($Articles)) {
        ?>
        <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src=<?php echo "/img/".$row["image"]; ?> alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src=<?php echo "/img/".$row["userimage"]; ?> width="35" height="35" alt="">
                                <span><?php echo $row["pseudo_utilisateur"]; ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $row["date_de_modification"]; ?></span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3"><?php echo $row["titre"]; ?></h4>
                        <a class="text-uppercase fw-bold" href=<?php echo"/Article/Fetch/".$row["id"]?>>Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>

    <!-- Blog End -->   