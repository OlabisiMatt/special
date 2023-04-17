<?php

include 'component/connect.php';

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
    <title>Accommodation</title>
    <link rel="stylesheet" href="style.css"/>

    <!-- font awesome cdn link-->
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <!--Navigation Bar here-->
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    Africa
                </div>
                <ul class="nav-items">
                    <li>
                        <a href="accommodation.php">Accommodation</a>
                    </li>

                    <li>
                        <a href="community.php">Community   </a>
                    </li>

                    <li>
                        <a href="link.php">Useful Links</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="index.php">Signout</a>
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
                <div class="slide" style="background:url(asset/image/home1.jpg) no-repeat">
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
        <h1 class="heading-title">Accommodation</h1>
    </div>
    
    <div class="accommodation">
        <section class="center">

            <!-- search form-->
            <form action="search.html" method="POST">
                <h3>Filter your search</h3>
                <div class="box">
                    <p>enter location<span>*</span></p>
                    <input type="text" name="location" required maxlength="50"
                    placeholder="enter city name" class="input">
                </div>
                <div class="flex">

                    <div class="box">
                        <p>Minimum Price<span>*</span></p>
                        <select name="minimum" class="input" required>
                            <option value="min">min</option>
                            <option value="300">£300</option>
                            <option value="400">£400</option>
                            <option value="500">£500</option>
                            <option value="600">£600</option>
                            <option value="700">£700</option>
                            <option value="800">£800</option>
                            <option value="900">£900</option>
                            <option value="1000">£1000</option>
                            <option value="1100">£1100</option>
                            <option value="1200">£1200</option>
                            <option value="1300">£1300</option>
                            <option value="1400">£1400</option>
                            <option value="1500">£1500</option>
                        </select>
                    </div>

                    <div class="box">
                        <p>Maximum Price<span>*</span></p>
                        <select name="maximum" class="input" required>
                            <option value="max">max</option>
                            <option value="300">£300</option>
                            <option value="400">£400</option>
                            <option value="500">£500</option>
                            <option value="600">£600</option>
                            <option value="700">£700</option>
                            <option value="800">£800</option>
                            <option value="900">£900</option>
                            <option value="1000">£1000</option>
                            <option value="1100">£1100</option>
                            <option value="1200">£1200</option>
                            <option value="1300">£1300</option>
                            <option value="1400">£1400</option>
                            <option value="1500">£1500</option>
                        </select>
                    </div>

                    <div class="box">
                        <p>Bedrooms<span>*</span></p>
                        <select name="bedroom" class="input" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                </div>
                <input type="submit" value="search property" name="search" class="btn">
            </form>

        </section>

        <!-- listed properties-->
        <section class="property-leasing">
            <h2 class="heading-title">Listed properties</h2>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="asset/image/house1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>2 bedroom flat</h3>
                        <p>£500 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>
    
                <div class="box">
                    <div class="image">
                        <img src="asset/image/house2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>1 bedroom flat</h3>
                        <p>£400 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>
    
                <div class="box">
                    <div class="image">
                        <img src="asset/image/house3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>3 bedroom flat</h3>
                        <p>£750 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="asset/image/house4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>2 bedroom flat</h3>
                        <p>£500 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>
    
                <div class="box">
                    <div class="image">
                        <img src="asset/image/house5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>1 bedroom flat</h3>
                        <p>£400 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>
    
                <div class="box">
                    <div class="image">
                        <img src="asset/image/house6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>3 bedroom flat</h3>
                        <p>£450 pcm</p>
                    </div>
                    <div class="more"><a href="view_property.php" class="btn">view details</a></div>
                </div>
            </div>
            
        </section>



    </div>




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

    <script src="script.js"></script>
</body>
</html>