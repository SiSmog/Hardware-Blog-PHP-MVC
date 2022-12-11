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
</head>

<body>



  <!-- Header -->


  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="/Article/Add" class="btn btn-dark btn-block">
            <i class="fas fa-plus"></i> Add Post
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-dark btn-block" data-toggle="modal" data-target="#addCategoryModal">
            Category
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-dark btn-block" data-toggle="modal" data-target="#addUserModal">
            User
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->

  <section id="posts">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>

            <table class="table table-striped">

              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Title </th>
                  <th>Creation Date </th>
                  <th>Modification Date</th>
                  <th>Image </th>
                  <th>Category </th>
                  <th>Blogeur Name </th>


                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <?php
                while ($row = mysqli_fetch_array($Articles)) {
                ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["titre"]; ?></td>
                    <td><?php echo $row["date_de_creation"]; ?></td>
                    <td><?php echo $row["date_de_modification"]; ?></td>
                    <td><?php echo "/img/" . $row["image"]; ?></td>
                    <td><?php echo $row["code_categorie"]; ?></td>
                    <td><?php echo $row["pseudo_utilisateur"]; ?></td>
                    <td><a href="dashboard/view/<?php echo $row["id"]; ?>" class="btn btn-dark">View</a></td>
                    <td><a href="Article/details/<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="dashboard/delete/<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>

                    <td>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->



  <!-- MODALS -->
  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form id="ADD_CATEGORY_MODAL">

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Save changes</button>
        </div>

      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form>

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="passowrd">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="passowrd2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>

          </form>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Save changes</button>
        </div>

      </div>
    </div>
  </div>


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