<?php

include 'component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';    
}
//header('location:home.php');


if(isset($_POST['post'])){

    $property_id = create_unique_id();
    $property_name = $_POST['property_name'];
    $property_name = filter_var($property_name, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $deposit = $_POST['deposit'];
    $deposit = filter_var($deposit, FILTER_SANITIZE_STRING);
    $address = $_POST['address'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);
    $rating = $_POST['rating'];
    $rating = filter_var($rating, FILTER_SANITIZE_STRING);
    $glazing = $_POST['glazing'];
    $glazing = filter_var($glazing, FILTER_SANITIZE_STRING);
    $band = $_POST['band'];
    $band = filter_var($band, FILTER_SANITIZE_STRING);
    $smoking = $_POST['smoking'];
    $smoking = filter_var($smoking, FILTER_SANITIZE_STRING);
    $heating = $_POST['heating'];
    $heating = filter_var($heating, FILTER_SANITIZE_STRING);
    $offer = $_POST['offer'];
    $offer = filter_var($offer, FILTER_SANITIZE_STRING);
    $type = $_POST['type'];
    $type = filter_var($type, FILTER_SANITIZE_STRING);
    $furnished = $_POST['furnished'];
    $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);
    $room = $_POST['room'];
    $room = filter_var($room, FILTER_SANITIZE_STRING);
    $bathroom = $_POST['bathroom'];
    $bathroom = filter_var($bathroom, FILTER_SANITIZE_STRING);
    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    $image_1 = $_FILES['image_1']['name'];
    $image_1 = filter_var($image_1, FILTER_SANITIZE_STRING);
    $image_1_ext = pathinfo($image_1, PATHINFO_EXTENSION);
    $rename_image_1 = create_unique_id().'.'.$image_1_ext;
    $image_1_tmp_name = $_FILES['image_1']['tmp_name'];
    $image_1_size = $_FILES['image_1']['size'];
    $image_1_folder = 'uploaded_files/'.$rename_image_1;

    $image_2 = $_FILES['image_2']['name'];
    $image_2 = filter_var($image_2, FILTER_SANITIZE_STRING);
    $image_2_ext = pathinfo($image_2, PATHINFO_EXTENSION);
    $rename_image_2 = create_unique_id().'.'.$image_2_ext;
    $image_2_tmp_name = $_FILES['image_2']['tmp_name'];
    $image_2_size = $_FILES['image_2']['size'];
    $image_2_folder = 'uploaded_files/'.$rename_image_2;

    if(!empty($image_2)){
        if($image_2_size > 2000000){
            $$warning_msg[] = 'image 2 size is too large!';
        }else{
            move_uploaded_file($image_2_tmp_name, $image_2_folder);
        }
    }else{
        $remove_image_2 = '';
    }

    $image_3 = $_FILES['image_3']['name'];
    $image_3 = filter_var($image_3, FILTER_SANITIZE_STRING);
    $image_3_ext = pathinfo($image_3, PATHINFO_EXTENSION);
    $rename_image_3 = create_unique_id().'.'.$image_3_ext;
    $image_3_tmp_name = $_FILES['image_3']['tmp_name'];
    $image_3_size = $_FILES['image_3']['size'];
    $image_3_folder = 'uploaded_files/'.$rename_image_3;

    if(!empty($image_3)){
        if($image_3_size > 2000000){
            $$warning_msg[] = 'image 3 size is too large!';
        }else{
            move_uploaded_file($image_3_tmp_name, $image_3_folder);
        }
    }else{
        $remove_image_3 = '';
    }

    $image_4 = $_FILES['image_4']['name'];
    $image_4 = filter_var($image_4, FILTER_SANITIZE_STRING);
    $image_4_ext = pathinfo($image_4, PATHINFO_EXTENSION);
    $rename_image_4 = create_unique_id().'.'.$image_4_ext;
    $image_4_tmp_name = $_FILES['image_4']['tmp_name'];
    $image_4_size = $_FILES['image_4']['size'];
    $image_4_folder = 'uploaded_files/'.$rename_image_4;

    if(!empty($image_4)){
        if($image_4_size > 2000000){
            $$warning_msg[] = 'image 4 size is too large!';
        }else{
            move_uploaded_file($image_4_tmp_name, $image_4_folder);
        }
    }else{
        $remove_image_4 = '';
    }

    $image_5 = $_FILES['image_5']['name'];
    $image_5 = filter_var($image_5, FILTER_SANITIZE_STRING);
    $image_5_ext = pathinfo($image_5, PATHINFO_EXTENSION);
    $rename_image_5 = create_unique_id().'.'.$image_5_ext;
    $image_5_tmp_name = $_FILES['image_5']['tmp_name'];
    $image_5_size = $_FILES['image_5']['size'];
    $image_5_folder = 'uploaded_files/'.$rename_image_5;

    if(!empty($image_5)){
        if($image_5_size > 2000000){
            $$warning_msg[] = 'image 5 size is too large!';
        }else{
            move_uploaded_file($image_5_tmp_name, $image_5_folder);
        }
    }else{
        $remove_image_5 = '';
    }

    if($image_1_size > 2000000){
        $$warning_msg[] = 'image 1 size is too large!';
    }else{
        $post_property = $conn->prepare("INSERT INTO `property`(property_id, 
        user_id, property_name, price, deposit, address, rating, 
        glazing, band, smoking, heating, offer, type, furnished, room, bathroom,
         description, image_1, image_2, image_3, image_4, image_5) VALUES(?,?,?,?
         ,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $post_property->execute([$property_id, $user_id, $property_name, 
        $price, $deposit, $address, $rating, $glazing, $band, $smoking, $heating, 
        $offer, $type, $furnished, $room, $bathroom, $description, $rename_image_1, 
        $rename_image_2, $rename_image_3, $rename_image_4, $rename_image_5]);
        move_uploaded_file($image_1_tmp_name, $image_1_folder);
        $success_msg[] = 'property posted';
    }

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post property</title>
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
                        <a href="accomodation.html">Accommodation</a>
                    </li>

                    <li>
                        <a href="community.html">Community   </a>
                    </li>

                    <li>
                        <a href="link.html">Useful Links</a>
                    </li>

                    <li>
                        <a href="about.html">About</a>
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

    <!--Property leasing start-->
    <div class="title">
        <h1 class="heading-title">Post Property</h1>
    </div>
    <section class="property-form">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>property details</h3>
            <div class="box">
                <p>property name <span>*</span></p>
                <input type="text" name="property_name" required placeholder="enter property name" class="input">
            </div>
            <div class="flex">
                <div class="box">
                    <p>property price <span>*</span></p>
                    <input type="number" name="price" required placeholder="enter property price" class="input">
                </div>
                <div class="box">
                    <p>deposit <span>*</span></p>
                    <input type="number" name="deposit" required placeholder="enter deposit" class="input">
                </div>
                <div class="box">
                    <p>property address <span>*</span></p>
                    <input type="text" name="address" required placeholder="enter property address" class="input">
                </div>
                <div class="box">
                    <p>property epc rating <span>*</span></p>
                    <input type="text" name="rating" required placeholder="enter epc rating" class="input">
                </div>
                <div class="box">
                    <p>property glazing <span>*</span></p>
                    <input type="text" name="glazing" required placeholder="enter property glazing" class="input">
                </div>
                <div class="box">
                    <p>council tax band <span>*</span></p>
                    <input type="text" name="band" required placeholder="enter council tax band" class="input">
                </div>
                <div class="box">
                    <p>smoking <span>*</span></p>
                    <select name="smoking" class="input" required>
                        <option value="yes"> yes</option>
                        <option value="no"> no</option>
                    </select>
                </div>
                <div class="box">
                    <p>central heating <span>*</span></p>
                    <select name="heating" class="input" required>
                        <option value="gas"> gas</option>
                        <option value="electric"> electric</option>
                    </select>
                </div>
                <div class="box">
                    <p>offer type <span>*</span></p>
                    <select name="offer" class="input" required>
                        <option value="sale"> sale</option>
                        <option value="rent"> rent</option>
                    </select>
                </div>
                <div class="box">
                    <p>property type <span>*</span></p>
                    <select name="type" class="input" required>
                        <option value="flat"> flat</option>
                        <option value="house"> house</option>
                    </select>
                </div>
                <div class="box">
                    <p>property status <span>*</span></p>
                    <select name="furnished" class="input" required>
                        <option value="unfurnished"> unfurnished</option>
                        <option value="furnished"> furnished</option>
                    </select>
                </div>
                <div class="box">
                    <p>how many bedroom <span>*</span></p>
                    <select name="room" class="input" required>
                        <option value="1"> 1 bedroom</option>
                        <option value="2"> 2 bedrooms</option>
                        <option value="3"> 3 bedrooms</option>
                        <option value="4"> 4 bedrooms</option>
                        <option value="5"> 5 bedrooms</option>
                        <option value="6"> 6 bedrooms</option>
                    </select>
                </div>
            </div>
            <div class="box">
                <p>how many bathroom <span>*</span></p>
                <select name="bathroom" class="input" required>
                    <option value="1"> 1 bathroom</option>
                    <option value="2"> 2 bathrooms</option>
                    <option value="3"> 3 bathrooms</option>
                    <option value="4"> 4 bathrooms</option>
                    <option value="5"> 5 bathrooms</option>
                    <option value="6"> 6 bathrooms</option>
                </select>
            </div>
            <div class="box">
                <p>property description <span>*</span></p>
                <textarea name="description"  cols="30" rows="10" maxlength="1200" class="input"
                required placeholder="enter property description"></textarea>
                </select>
            </div>
            <div class="box">
                <p>image 1 <span>*</span></p>
                <input type="file" name="image_1" class="input" accept="image/*" required>
            </div>
            <div class="flex">
                <div class="box">
                    <p>image 2 <span>*</span></p>
                    <input type="file" name="image_2" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 3 <span>*</span></p>
                    <input type="file" name="image_3" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 4 <span>*</span></p>
                    <input type="file" name="image_4" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 5 <span>*</span></p>
                    <input type="file" name="image_5" class="input" accept="image/*" required>
                </div>
            </div>
            <input type="submit" value="post property" name="post" class="btn">
        </form>

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