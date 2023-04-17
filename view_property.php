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
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="#">Signout</a>
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

    <!--view property start-->
    <div class="title">
        <h1 class="heading-title">view property</h1>
    </div>
    <section class="view-property">

        <div class="details">
            <div class="thumb">
                <div class="big-image">
                    <img src="asset/image/house1.jpg" alt="">
                </div>
                <div class="small-images">
                    <img src="asset/image/house1.jpg" alt="">
                    <img src="asset/image/house4.jpg" alt="">
                    <img src="asset/image/house5.jpg" alt="">
                    <img src="asset/image/house6.jpg" alt="">
                </div>
            </div>
            <h3 class="name">1 bedroom flat</h3>
            <p class="location"><i class="fas fa-map-marker-alt"><span>Aberdeen, Scotland - AB24 7KG</span></i></p>
            <div class="info">
                <p><i class="fas fa-gbp"><span>450</span></i></p>
                <p><i class="fas fa-user"><span>matt fir (owner)</span></i></p>
                <p><i class="fas fa-phone"></i><a href="tel:031245678">0312345678</a></p>
                <p><i class="fas fa-building"><span>flat</span></i></p>
                <p><i class="fas fa-house"><span>rent</span></i></p>
                <p><i class="fas fa-calendar"></i><span>10-02-2023</span></p>
            </div>
            <h3 class="titles">details</h3>
            <div class="flex">
                <div class="box">
                    <p><i>rooms :</i><span>1 bedroom</span></p>
                    <p><i>deposit :</i><span>0</span></p>
                    <p><i>status :</i><span>available</span></p>
                    <p><i>bathroom :</i><span>1</span></p>
                    <p><i>furnished :</i><span>furnished</span></p>
                </div>
                <div class="box">
                    <p><i>epc rating :</i><span>c</span></p>
                    <p><i>council tax band :</i><span>type A</span></p>
                    <p><i>glazing :</i><span>double</span></p>
                    <p><i>central heating :</i><span>gas</span></p>
                    <p><i>smoking :</i><span>no</span></p>
                </div>
            </div>
            <h3 class="titles">description</h3>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                 molestiae cum sint repellendus, quod consequatur sit beatae dicta quos quidem nesciunt
                  nostrum autem laborum officia magni voluptas possimus. Sit, nobis!</p>
            <form action="" method="post">
                <input type="submit" value="send enquiry" name="enquiry" class="inline-btn">
            </form>
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


    <script src="script.js"></script>

</body>
</html>