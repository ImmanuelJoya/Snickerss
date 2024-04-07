<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

include_once "config.php";

$error = "";



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $password = trim($_POST["password"]);

    if (empty($name)) {
        $error .= "Please enter a name.<br>";
    }
    if (empty($phone)) {
        $error .= "Please enter a phone.<br>";
    }
    if (!is_numeric($phone)) {
        $error .= "Invalid phone number.<br>";
    }
    if (empty($email)) {
        $error .= "Please enter an email.<br>";
    }
    if (empty($password)) {
        $error .= "Please enter a password.<br>";
    }

    $profile_picture = '';
    if (!empty($_FILES["profile_picture"]["name"])) {
        $profile_picture = basename($_FILES["profile_picture"]["name"]);
        $target_dir = "uploads/";

        $target_file = $target_dir . $profile_picture;
        $upload_ok = true;
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if (empty($check)) {
            $error .= "Profile picture file is not an image.<br>";
            $upload_ok = false;
        }

        if ($_FILES["profile_picture"]["size"] > 500000) {
            $error .= "Sorry, your profile picture file is too large.<br>";
            $upload_ok = false;
        }

        if (
            $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
            && $image_file_type != "gif"
        ) {
            $error .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed for profile picture.<br>";
            $upload_ok = false;
        }

        if ($upload_ok) {
            if (!move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $error .= "Sorry, there was an error uploading your file for profile picture.<br>";
            }
        }
    }


    if (empty($error)) {
        $sql = "INSERT INTO users (name, email, phone, address, profile_picture, password)
        VALUES ('$name', '$email', '$phone',' $address', '$profile_picture', '$password')";
        if ($conn->query($sql) === true) {
            header("location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        $_SESSION["message"] = $error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
</head>

<body>

</body>

</html>

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


    <h2 class="mt-4" style="text-align: center;"><strong>Sign Up</strong></h2>

    <section>

        <div class="container">
            <div class="container-1 mt-5  justify-content-center">

                <div class="wrapper">
                    <p>Please fill this form to register.</p>

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

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" type="text" name="phone" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" type="text" name="address" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="profile_picture">Profile picture</label>
                            <input type="file" name="profile_picture" id="profile_picture">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <p>Already have an account? <a href="login.php">Login here</a>.</p>
                    </form>
                </div>
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