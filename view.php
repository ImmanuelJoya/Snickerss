<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/snickers.svg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <section class="s1">
        <!-- <nav class="navbar bg-primary">
        <div class="container">
            <h2>SNICKERS</h2>
            <img class="icon" src="images/icon.svg" alt="" style="width:  50px; height: auto;">
        </div>
    </nav> -->
        <div class="container p-4">
            <nav class="navbar navbar-expand-lg bg-warning w-100 mt-3 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <img class="icon" src="images/icon.svg" alt="" style="width:  70px; height: auto;">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view.php">View More</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Snickers</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Product Catagories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">See All</a></li>
                                    <li><a class="dropdown-item" href="#">Ice Cream</a></li>
                                    <li><a class="dropdown-item" href="#">Brownie</a></li>
                                    <li><a class="dropdown-item" href="#">White Chocolate</a></li>
                                    <li><a class="dropdown-item" href="#">Almond</a></li>
                                </ul>
                            </li>
                            <?php
                            if (empty($_SESSION["email"])) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profile</a>
                                </li>
                                <?php
                                if ($_SESSION["type"] == 'admin') {
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Admin</a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>


    <h2 class="mt-4" style="text-align: center;"><strong>Our Most Sold Products</strong></h2>

    <section>

        <div class="container">
            <div class="container-1 mt-5  justify-content-center">
                <div class="box-1 bg-dark text-light">
                    <div class="card-body text-center">
                        <h2>Product One</h4>
                            <img style="width: 70px; height: auto;
        border-radius: 50%;" src="images/img2.webp" alt="">
                            <p>SNICKERS Fun Size <br>Chocolate Candy Bars </p>
                    </div>
                </div>

                <div class="box-2  bg-secondary text-light">
                    <div class="card-body text-center">
                        <h2>Product Two</h4>
                            <img style="width: 70px; height: auto;
        border-radius: 50%;" src="images/img3.webp" alt="">
                            <p>SNICKERS Fun Size <br> Chocolate Candy Bars </p>
                    </div>
                </div>

                <div class="box-3  bg-dark text-light">
                    <div class="card-body text-center">
                        <h2>Product Three</h4>
                            <img style="align-items: center; width: 70px; height: auto;
        border-radius: 50%;" src="images/img4.png" alt="">
                            <p>SNICKERS Fun Size <br> Chocolate Candy Bars </p>
                    </div>
                </div>
            </div>

            <div class="container-2 justify-content-center d-flex mt-4 ">
                <div class="box-4  bg-dark text-light">
                    <div class="card-body text-center">
                        <h2>Product Four</h4>
                            <img style="width: 70px; height: auto;
        border-radius: 50%;" src="images/img1.webp" alt="">
                            <p>SNICKERS Fun Size <br>Chocolate Candy Bars </p>
                    </div>
                </div>


                <div class="box-5  bg-secondary text-light">
                    <div class="card-body text-center">
                        <h2>Product Five</h4>
                            <img style="width: 70px; height: auto;
        border-radius: 50%;" src="images/img5.webp" alt="">
                            <p>SNICKERS Singles Size <br> Chocolate Candy Bars, 1.86 oz </p>
                    </div>
                </div>

                <div class="box-6 bg-dark text-light">
                    <div class="card-body text-center">
                        <h2>Product Six</h4>
                            <img style="width: 70px; height: auto;
        border-radius: 50%;" src="images/img6.webp" alt="">
                            <p>SNICKERS Singles Size <br> Chocolate Candy Bars, 1.86 oz</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <hr>
    <!-- cards -->

    <!-- <section class="p-5">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
              </div>
              <h3 class="card-title mb-3">Virtual</h3>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Iure, quas quidem possimus dolorum esse eligendi?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-person-square"></i>
              </div>
              <h3 class="card-title mb-3">Hybrid</h3>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Iure, quas quidem possimus dolorum esse eligendi?
              </p>
              <a href="#" class="btn btn-dark">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="card-title mb-3">In Person</h3>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Iure, quas quidem possimus dolorum esse eligendi?
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <footer>

        <div class="container">

            <img class="footericon " src="images/icon.svg" alt="">

            <h3 class="footerh3 text-warning fw-semibold">Follow us on</h3>

            <div class="footeri btn btn-group btn-lg text-light">
                <i class="bi bi-facebook d-flex h3 mx-2 "></i>
                <i class="bi bi-instagram d-flex h3 mx-2 "></i>
                <i class="bi bi-twitter d-flex h3 mx-2 "></i>
                <i class="bi bi-youtube d-flex h3 mx-2 "></i>
            </div>

            <div class="parafooter">
                <p>
                    <strong>This is a sub marketing site</strong>
                    <br>
                    This site includes information, games, advertisements and promotional offers featuring our products.
                    <br>
                    Children should get a parent's permission before
                    visiting any website or giving personal information. You must be 18 or older to shop online.
                </p>
                <p>
                    © 2024 Snickers Company, Inc., All rights reserved.
                </p>
            </div>
        </div>





    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>