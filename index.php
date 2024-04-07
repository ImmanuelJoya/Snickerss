<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNICKERS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/snickers.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body class="bg-transparent">
    <header>
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
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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

                <?php
                if (isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="    margin-top: 10px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
                ?>




            </div>
        </section>

        <section>



            <div class="hungrt_text">
                <h3 class="hungry text-center text-warning fs-2 fw-bold mt-3"> Hungry?<br></h3>
                <h1 class="myjnas">MAYBE YOU JUST NEED A <br> <span class="sapnn text-warning">SNICKERS</span></h1>
            </div>

        </section>

    </header>

    <section>
        <div class="container d-md-flex">
            <img class="rta mt-5" src="images/undraw_real_time_analytics_re_yliv.svg" alt="">
            <p style="font-size: medium;
        font-family:Verdana, Geneva, Tahoma, sans-serif;" class=" align-items-center p-lg-5"><span
                    class="firstw text-uppercase text-danger fs-1 fw-bold">S</span>nickers is a brand of chocolate bar
                consisting
                of nougat topped with caramel and peanuts, all encased in milk chocolate.
                The bars are made by the American company Mars Inc..
                The annual global sales of Snickers is over $380 million,
                and is widely considered the most popular and bestselling candy bar in the world <br><br>
                In 1930, Mars introduced Snickers, named after the favorite horse of the Mars family
            </p>
        </div>
    </section>

    <section>

        <div class="container">



        </div>

    </section>

    <section>
        <div class="container">
            <img class="plady gs mt-5 " src="images/undraw_gone_shopping_re_2lau.svg" alt="">

            <h4 class=" mt-5 text-uppercase text-center section-title">OUR Product:</h4>
            <p class="align-items-center p-lg-5 fw-semibold">
                Snickers Original <br>
                Snickers Milk Chocolate<br>
                Snickers Almond<br>
                Snickers Peanut Butter<br>
                Snickers White Chocolate<br>
                Snickers Peanut Brownie<br>
                Snickers Almond Brownie Dark Chocolate<br>
                Snickers Ice Cream<br>
                Snickers Ice Cream Bars<br>
                Snickers 100 Calories Chocolate<br>
                Snickers Creamy Peanut Butter<br>
                Snickers Crunchy Peanut Butter<br>
            </p>
        </div>
    </section>

    <div class="container">

        <div class="btn btn-group btn-lg btn-warning mb-3 ">
            <!-- <a href="#"> <i class="bi bi-house"></i></a>
          <a href="https://www.snickers.com"> <i class="bi bi-house-up-fill  "></i></a> -->

            <a href="#" class="btn btn-outline-dark" aria-current="page"><i class="bi bi-house"></i></a>
            <a href="https://www.snickers.com" target="_blank" class="btn btn-outline-dark"> <i
                    class="bi bi-house-fill "></i></a>

        </div>

    </div>


    <!-- <section class=" mb-4">
    <div class="container d-flex gap-4 d-flex">

      <div class="card">
        <img
          src="https://lhcdn.mars.com/adaptivemedia/rendition/id_2ebc7d48c1626f1ab80c5763a1f6deeebd18db4b/name_2ebc7d48c1626f1ab80c5763a1f6deeebd18db4b.jpg">
        <div class="card-content">
          <h2 style="color: aliceblue;">1930</h2>
          <p>The very first SNICKERS Bar, allegedly named after a horse, was manufactured in Chicago and sold for five
            cents. </p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>


      <div class="card">
        <img src="images/SN-about-story-2.jpg">
        <div class="card-content">
          <h2 style="color: aliceblue;">1967-1990</h2>
          <p>SNICKERS is called the Marathon Bar in the UK. </p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>

      <div class="card ">
        <img src="images/SN-about-story-3.jpg">
        <div class="card-content">
          <h2 style="color: aliceblue;">1968</h2>
          <p>Fun Size SNICKERS is created, followed by an increase in satisfaction levels worldwide. </p>
          <a href="" class="btn">Read More</a>
        </div>
      </div>

      <div class="card">
        <img src="images/SN-about-story-4.jpg">
        <div class="card-content">
          <h2 style="color: aliceblue;">1984</h2>
          <p>SNICKERS is an official sponsor of the 1984 LA Olympic Games. We take home gold in every non-sport event.
          </p>
          <a href="" class="btn">Read More</a>
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