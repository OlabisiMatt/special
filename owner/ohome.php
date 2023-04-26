<?php

include '../component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css"/>

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!--Navigation Bar here-->
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    Dashboard
                </div>
                <ul class="nav-items">
                    <li>
                        <a href="../my_listing.php">my listing</a>
                    </li>

                    <li>
                        <a href="../post_property.php">add new   </a>
                    </li>

                    <li>
                        <a href="../home.php">Home</a>
                    </li>

                    <li>
                        <a href="../signout.php">Signout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <main>
        <!--  home section starts -->
    <section class="home">
        <div class="home-slide">
            <div class="wrapper">
                <div class="slide" style="background:url(../asset/image/home1.jpg) no-repeat">
                    <div class="content">
                        <h3>Welcome To Africa Help</h3>
                        <span>home away from home</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  home section end -->

    <!--Property leasing start-->
    <div class="title">
        <h1 class="heading-title">Property Leasing</h1>
    </div>
    <section class="property-leasing">
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../asset/image/house1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>2 bedroom flat</h3>
                    <p>£500 pcm</p>
                </div>
                <div class="more"><a href="#" class="btn">view details</a></div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../asset/image/house2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>1 bedroom flat</h3>
                    <p>£400 pcm</p>
                </div>
                <div class="more"><a href="#" class="btn">view details</a></div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../asset/image/house3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>3 bedroom flat</h3>
                    <p>£750 pcm</p>
                </div>
                <div class="more"><a href="#" class="btn">view details</a></div>
            </div>
        </div>

    </section>
    <!-- Property leasing end-->

    </main>

    <!--Footer Start-->
    <Footer>
        <div class="footer-content">
            <h3>Contact us</h3>
            <p>Telephone: +44-700-000-000</p>
            <p>Mobile: +44-700-000-000</p>
            <p>Email: dyu@gmail.com</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 Olabisi. Created by <span>2201917</span> </p>

        </div>
    </Footer>
    <!--Footer Ends-->

<!-- sweetalert cdn link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- personal script-->
<script src="script.js"></script>

<?php include 'component/message.php' ?>

</body>
</html>