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


<!-- Header -->


<!-- Actions -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <input type="submit" form="profileEdit" class="btn btn-success btn-block" Value="Save Changes">
            </div>
        </div>
    </div>
</section>

<!-- PROFILE -->
<?php while ($row = mysqli_fetch_array($User)) { ?>
    <section id="profile">
        <div class="container">
                <form id="profileEdit" action="/Profile/UpdateProfileDetails" method="post"class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= $row["pseudo_utilisateur"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= $row["email"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="passowrd">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passowrd2">Confirm Password</label>
                                    <input type="password" name="password2" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <h3>Your Avatar</h3>
                            <img width="300" height="300" src=<?php echo "/img/user/" . $row["image"]; ?>>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label for="image" class="custom-file-label">Choose File</label>
                            </div>
                            <button type="submit" form="imageEdit" class="btn btn-primary btn-block">Edit Image</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </section>
<?php } ?>

<!-- FOOTER -->



<!-- ADD USER MODAL -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    CKEDITOR.replace('editor1');
</script>
</body>

</html>