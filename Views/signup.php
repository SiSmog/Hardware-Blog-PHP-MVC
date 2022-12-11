<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="/css/login.css" />
</head>

<body>
  <?php require("components/navbar.php") ?>
  <div class="align">

    <div class="grid">

      <form action="/User/Register" method="POST" class="form login">

        <div class="form__field">
          <label for="login__email">
            <svg class="icon">
              <use xlink:href="#icon-email"></use>
            </svg>
            <span class="hidden">Email</span></label>
          <input autocomplete="email" id="login__email" type="text" name="email" class="form__input" placeholder="Email" required>
        </div>
        <div class="form__field">
          <label for="login__username"><svg class="icon">
              <use xlink:href="#icon-user"></use>
            </svg><span class="hidden">Username</span></label>
          <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label for="login__password"><svg class="icon">
              <use xlink:href="#icon-lock"></use>
            </svg><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Sign Up">
        </div>

      </form>

      <p class="text--center">Already a member?
        <a href="/User/Signin"> Sign in</a>
      </p>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
      <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
        <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
      </symbol>
      <symbol id="icon-lock" viewBox="0 0 1792 1792">
        <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
      </symbol>
      <symbol id="icon-user" viewBox="0 0 1792 1792">
        <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
      </symbol>
      <symbol id="icon-email" viewBox="0 -5 25 25">
        <path d="M.375.454v18.092h25.25V.454H.375zm23.333 5.504v7.997l-6.773-3.72 6.773-4.277zm0 10.184v.488H2.292v-.488l8.627-4.738L13 12.716l2.082-1.312 8.626 4.738zm0-12.451L13 10.45 2.292 3.691v-1.32h21.417v1.32zM2.292 13.954V5.958l6.774 4.276-6.774 3.72z" />
      </symbol>
    </svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
  </div>
</body>

</html>