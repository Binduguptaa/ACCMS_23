<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- manual stylesheet -->
  <link rel="stylesheet" href="style.css">

  <title>Mulund College Of Commerce</title>

</head>

<body>
  <div id="naac" style="background: linear-gradient(50deg, darkred 40%, transparent 60%)">

    <nav class="navbar navbar-expand-sm navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand mx-3 " href="index.php">
          <img src="images/mcc-logo.png" alt="Logo" style="width: 50px;">
        </a>
        <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="course_details.php"><b>Courses</b></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="index.php"><b>Home</b></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="login_as.php"><b>Login</b></a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="sign_up.php"><b>Sign Up</b></a>
            </li>
          </ul>
        </div>
    </nav>
  </div>

  <div class="py-10 shadow h-200" style="background:linear-gradient(-50deg, darkred 40%, transparent 60%)">
    <div class="container-fluid my-4">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-4 font-weight-bold mt-5">
            <?php
            $current_year = date('Y');
            $next_year = date('Y', strtotime('+1 year'));
            echo "Admission Started for $current_year-$next_year";
            ?>
          </h1>
          <p class="py-lg-4 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aperiam similique error, <br> iste molestiae dignissimos odit voluptat</p>
        </div>
      </div>
    </div>
  </div>
  <!-- About us -->
  <section class="py-5" style="background-color:#F5F5F5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-5 ">
          <h2 class="font-weight-bold">About <br>Additional credit course management System </h2>
          <div class="pr-5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis voluptates maiores consectetur, sunt nisi? Commodi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam dolore magni laudantium?</p>
          </div>
          <a href="about-us.php" class="btn btn-danger bg-danger">Know More</a>
        </div>
        <div class="col-lg-6 naac-img"></div>
      </div>
    </div>
  </section>
  <section style="background-color:light">
    <div class="text-white py-5" style="background:#000000bb">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h5><b>ACCMS</b></h5>

            <ul class="fa-ul ml-4">
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
              <li><a href="course_details.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>What We Offer</a></li>
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Carrers</a></li>
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>All Courses</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h5><b>More</b></h5>

            <ul class="fa-ul ml-4">
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a></li>
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Privacy Policy</a></li>
              <li><a href="course_details.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>Help</a></li>
              <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i>Contact</a></li>
            </ul>
          </div>

        </div>
      </div>
  </section>
</body>

</html>