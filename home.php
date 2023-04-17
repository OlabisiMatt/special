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
    <title>Home</title>
    <link rel="stylesheet" href="style.css"/>

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
                        <a href="about.html">About</a>
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
        <h1 class="heading-title">Property Leasing</h1>
    </div>
    <section class="property-leasing">
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="asset/image/house1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>2 bedroom flat</h3>
                    <p>£500 pcm</p>
                </div>
                <div class="more"><a href="#" class="btn">view details</a></div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="asset/image/house2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>1 bedroom flat</h3>
                    <p>£400 pcm</p>
                </div>
                <div class="more"><a href="#" class="btn">view details</a></div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="asset/image/house3.jpg" alt="">
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

    <!--Community start-->
    <div class="title">
        <h1 class="heading-title">Community</h1>
    </div>
    <section class="community">

        <div class="community-container">
            <div class="community-box">
                <h3 class="">Author: Teebooks</h3>
                <h3 class="">Topic: Spark it</h3>
                <p>Message: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam ipsum deserunt quas cum quae 
                    numquam optio? Nisi a est aspernatur sequi similique voluptas nemo et voluptate neque officia, accusamus voluptatem</p>
                <div class="load-more"><a href="#" class="btn">more</a></div>
            </div>

            <div class="community-box">
                <h3 class="">Author: Brad</h3>
                <h3 class="">Topic: Life style</h3>
                <p>Message: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam ipsum deserunt quas cum quae 
                    numquam optio? Nisi a est aspernatur sequi similique voluptas nemo et voluptate neque officia, accusamus voluptatem.</p>
                <div class="load-more"><a href="#" class="btn">more</a></div>
            </div>

        </div>
        

    </section>
    <!--Community Ends-->

    <!--Useful Links start-->
    <div class="title">
        <h1 class="heading-title">Useful Links</h1>
    </div>
    <section class="link">

        <div class="link-container">
            <div class="link-box">
                <h3>School</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, necessitatibus. Ut sit itaque eius illo omnis explicabo
                     nulla obcaecati libero et numquam voluptate, quod quibusdam, debitis magni commodi, soluta est.</p>
                <a href="#" class="btn">Visit</a>     
            </div>

            <div class="link-box">
                <h3>City Council</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, necessitatibus. Ut sit itaque eius illo omnis explicabo
                     nulla obcaecati libero et numquam voluptate, quod quibusdam, debitis magni commodi, soluta est.</p>
                <a href="#" class="btn">Visit</a>     
            </div>

            <div class="link-box">
                <h3>Transport</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, necessitatibus. Ut sit itaque eius illo omnis explicabo
                     nulla obcaecati libero et numquam voluptate, quod quibusdam, debitis magni commodi, soluta est.</p>
                <a href="#" class="btn">Visit</a>     
            </div>
        </div>

    </section>
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