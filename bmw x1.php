<?php

session_start();
include 'registration.php';

mysqli_select_db($con, 'showroom');

if (isset($_POST['book'])) {
    $bname = mysqli_real_escape_string($con, $_POST['bname']);
    $bemail = $_POST['bemail'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $model = $_POST['model'];
    $color = $_POST['color'];

    $namequery = " select * from orders where bname='$bname' and model='$model' ";
    $query = mysqli_query($con, $namequery);
    $namecount = mysqli_num_rows($query);
    if ($namecount > 0) {
?>
        <script>
            alert("Order already exists!");
        </script>
        <?php
    } else {
        $addquery = "insert into orders (bname, bemail, mobile, address, model, color) values ('$bname', '$bemail', '$mobile', '$address', '$model', '$color')";
        if (mysqli_query($con, $addquery)) {
        ?>

            <script>
                alert("Order Booked successfully!\nYou will receive conformation on entered Mobile Number.");
            </script>
<?php
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW X1</title>
    <link rel="stylesheet" href="style.css">
    <?php include "links.php" ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
            <?php

            if (isset($_SESSION['username'])) {
                echo '
            <div class="container">
                <a class="navbar-brand" href="index.php"><img class="logo" src="./images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="indexlogin.php">Home </a> </li>
                        <li class="nav-item"><a class="nav-link" href="brands.php"> Brands </a></li>
                        <li class="nav-item"><a class="nav-link" href="queryform.php"> Contact Us </a></li>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Welcome, ' . $_SESSION['username'] . '</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>';
            } else {
                echo '<div class="container">
                <a class="navbar-brand" href="index.php"><img class="logo" src="./images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="index.php">Home </a> </li>
                        <li class="nav-item"><a class="nav-link" href="brands.php"> Brands </a></li>
                        <li class="nav-item"><a class="nav-link" href="queryform.php"> Contact Us </a></li>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Login/Register </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="signup.php">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>';
            }

            ?>

        </nav>
        <br>
        <br>
        <h3 class="rec3">BMW X1 </h3>
        <div id="bmw_x1" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#bmw_x1" data-slide-to="0" class="active"></li>
                <li data-target="#bmw_x1" data-slide-to="1"></li>
                <li data-target="#bmw_x1" data-slide-to="2"></li>
                <li data-target="#bmw_x1" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/models/BMW/X1/bmw_x1_1.jpg" alt="Front">
                    <div class="carousel-caption">
                        <h3>Front-View</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/models/BMW/X1/bmw_x1_2.jpg" alt="Side">
                    <div class="carousel-caption">
                        <h3>Side-View</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/models/BMW/X1/bmw_x1_3.jpg" alt="Rear">
                    <div class="carousel-caption">
                        <h3>Rear-View</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/models/BMW/X1/bmw_x1_4.jpg" alt="interior">
                    <div class="carousel-caption">
                        <h3>Interior-View</h3>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#bmw_x1" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#bmw_x1" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br>
        <br>
        <div class="container" style="color: white; background: rgba(0, 0, 0, 0.2);">
            <h2>BMW X1 Key Specifications: </h2>
            <div class="row">
                <div class="col-sm-6" style="padding: 10px;">
                    <div class="container" style="color: black; background: rgba(255, 255, 255, 0.5);">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark table-hover" style="white-space:nowrap;">
                                <thead style="white-space:nowrap; border: 1px solid white; border-radius:10px">
                                    <tr>
                                        <th>Price</th>
                                        <th>Milage</th>
                                        <th>Engine</th>
                                        <th>Transmission</th>
                                        <th>Fuel Type</th>
                                        <th>Seating Capacity</th>
                                    </tr>
                                </thead>
                                <tbody style="white-space:nowrap; border: 1px solid white; border-radius:10px">
                                    <tr>
                                        <td>??? 35.90 Lakh onwards</td>
                                        <td>14.82 to 19.62 kmpl</td>
                                        <td>1995 to 1998 cc</td>
                                        <td>Automatic (Dual Clutch) & Automatic (Torque Converter)</td>
                                        <td>Petrol & Diesel</td>
                                        <td>5 Seater</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1>BMW X1 Price</h1>
                    <p>BMW X1 price starts at ??? 35.90 Lakh and goes upto ??? 42.90 Lakh. The price of Petrol version for X1 ranges between ??? 35.90 Lakh - ??? 38.70 Lakh and the price of Diesel version for X1 ranges between ??? 39.90 Lakh - ??? 42.90 Lakh.</p>
                </div>
            </div>
            <br>
            <br>
            <h2>Book Now</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="bname" placeholder="Enter Your Full Name" name="bname" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="bemail">Email:</label>
                    <input type="email" class="form-control" id="bemail" placeholder="Enter Email" name="bemail" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile NO:</label>
                    <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <br>
                    <textarea class="form-control" rows="5" id="address" placeholder="Enter Shipping Address" required autocomplete="off" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="model">Select Model: </label>
                    <br>
                    <select name="model" class="form-control">
                        <title>Select Model</title>
                        <option value="BMW X1 sDrive 20i SportX"> sDrive 20i SportX ??? 35.90 Lakh </option>
                        <option value="BMW X1 sDrive20i xLine"> sDrive20i xLine ??? 38.70 Lakh </option>
                        <option value="BMW X1 sDrive20d xLine">sDrive20d xLine ??? 39.90 Lakh </option>
                        <option value="BMW X1 sDrive20d M Sport"> sDrive20d M Sport ??? 42.90 Lakh </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="color">Select Color : </label>
                    <br>
                    <select name="color" class=" form-control">
                        <option value="Black"> Black </option>
                        <option value="Grey"> Grey </option>
                        <option value="White"> White </option>
                        <option value="Blue"> Blue </option>
                    </select>
                </div>

                <button type="book" class="btn btn-dark" name="book">Book Now</button>
            </form>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="fixed-bottom">
        <div>
            <div>
                <p class="footer-links">Connect With Us</p>
            </div>
            <div class="footer-right">
                <a href="#" style="color: #bababa;"><i class="fa fa-facebook"></i></a>
                <a href="#" style="color: #bababa;"><i class="fa fa-twitter"></i></a>
                <a href="#" style="color: #bababa;"><i class="fa fa-linkedin"></i></a>
                <a href="#" style="color: #bababa;"><i class="fab fa-whatsapp"></i></a>
            </div>

            <div class="footer-left">
                <p>Copyright ??
                    <?php echo date("Y"); ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var dummyContent = $(".dummy-content").children(),
            i;

        $("#add-content").click(function(e) {
            e.preventDefault();

            if ($(dummyContent[0]).is(":visible")) {
                for (i = 0; i < dummyContent.length; i++) {
                    $(dummyContent[i]).fadeOut(600);
                }
            } else {
                for (i = 0; i < dummyContent.length; i++) {
                    $(dummyContent[i])
                        .delay(600 * i)
                        .fadeIn(600);
                }
            }
        });
    </script>
</body>

</html>