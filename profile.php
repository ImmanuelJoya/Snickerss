<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once "config.php";

session_start();

if (empty($_SESSION["email"])) {
    header("location: login.php");
} else {

    $email = $_SESSION['email'];
    $id = $_SESSION['id'];

    $sql = "select *from users where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    $email = $name = $phone = $address = $profile_picture = $type = '';
    if ($count == 1) {
        $email = $row["email"];
        $name = $row["name"];
        $phone = $row["phone"];
        $address = $row["address"];
        $profile_picture = $row["profile_picture"];
        $type = $row["type"];
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <section class="s1">
        <div class="container p-4">
            <nav class="navbar navbar-expand-lg bg-warning w-100 mt-3 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <img class="icon" src="images/icon.svg" alt="" style="width:  70px; height: auto;">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <h2 class="mt-4" style="text-align: center;"><strong>Hi, <b><?php echo $name; ?></b>. Welcome to our site.</strong></h2>

    <section>

        <div class="container">

            <?php
            if (!empty($_SESSION['message'])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="    margin-top: 10px;">
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>


            <?php
            if (!empty($profile_picture)) {
            ?>
                <div class="container-1 mt-5  justify-content-center">
                    <img style="width: 200px;" src="uploads/<?php echo  $profile_picture; ?>" alt="profile">
                </div>
            <?php
            }
            ?>
            <div class="container-1 mt-5  justify-content-center">
                <p> Email: <strong><?php echo  $email; ?></strong></p>
            </div>
            <div class="container-1 mt-5  justify-content-center">
                <p> Phone: <strong><?php echo  $phone; ?></strong></p>
            </div>
            <div class="container-1 mt-5  justify-content-center">
                <p> Address: <strong><?php echo  $address; ?></strong></p>
            </div>
            <div class="container-1 mt-5  justify-content-center">
                <p> Account Type: <strong><?php if ($type == 'admin') {
                                                echo 'Administrator';
                                            } else {
                                                echo 'Normal';
                                            } ?></strong></p>
            </div>
            <div class="container-1 mt-5  justify-content-center">
                <p style="margin-right: 5px;"> <a href="edit.php" class="btn btn-warning ml-3">Edit</a> </p>
                <p> <a href="logout.php" class="btn btn-danger ml-3">Logout</a> </p>
            </div>
        </div>
    </section>
    <hr>
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
                    This site includes information, games, advertisements and promotional offers featuring our products. <br>
                    Children should get a parent's permission before
                    visiting any website or giving personal information. You must be 18 or older to shop online.
                </p>
                <p>
                    © 2024 Snickers Company, Inc., All rights reserved.
                </p>
            </div>
        </div>





    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>