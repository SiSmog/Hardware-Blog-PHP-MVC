<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="/Home" class="navbar-brand">
            <h1 class="m-0 display-5 text-uppercase text-white">HARDWARE</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/Home" class="nav-item nav-link">Home</a>
                <a href="/Explore" class="nav-item nav-link">Explore</a>
                <a href="/Search/Filter" class="nav-item nav-link">Search</a>
                <a href="/Contact" class="nav-item nav-link">Contact</a>
                <?php
                if (isset($_SESSION["username"])) {
                    if ($_SESSION["uservalidation"] < 3) {
                ?>
                        <div class="nav-item dropdown">
                            <a href="/User/Signin" class="nav-item nav-link primary text-white px-5 ms-3 d-none d-lg-block dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION["username"] ?> <img class="avatar" src=<?php echo "/img/user/" . $_SESSION["userimage"] ?>></img></a>
                            <div class="dropdown-menu m-5 mt-0">
                                <a href="/Dashboard" class="dropdown-item f-30">Dashboard</a>
                                <a href="/Dashboard" class="dropdown-item">Edit Account</a>
                                <a href="/User/Logout" class="dropdown-item">Logout</a>

                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="nav-item dropdown">
                            <a href="/User/Signin" class="nav-item nav-link primary text-white px-5 ms-3 d-none d-lg-block dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION["username"] ?> <img class="avatar" src=<?php echo "/img/user/" . $_SESSION["userimage"] ?>></img></a>
                            <div class="dropdown-menu m-5 mt-0">
                                <a href="/Dashboard" class="dropdown-item">Edit Account</a>
                                <a href="/User/Logout" class="dropdown-item">Logout</a>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                } else {
                ?>
                    <a href="/User/Signin" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">SIGN IN <i class="bi bi-box-arrow-in-right"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->