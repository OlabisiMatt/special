<?php

include 'component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}


if(isset($_Get['get_id'])){
    $get_id = $_Get['get_id'];
}else{
    $get_id = '';
    // header('location:home.php');

}


if(isset($_POST['update'])){
    
    $update_id = $_POST['property_id'];
    $update_id = filter_var($update_id, FILTER_SANITIZE_STRING);
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


    $old_image_1 = $_POST['old_image_1'];
    $old_image_1 = filter_var($old_image_1, FILTER_SANITIZE_STRING);
    $image_1 = $_FILES['image_1']['name'];
    $image_1 = filter_var($image_1, FILTER_SANITIZE_STRING);
    $image_1_ext = pathinfo($image_1, PATHINFO_EXTENSION);
    $rename_image_1 = create_unique_id().'.'.$image_1_ext;
    $image_1_tmp_name = $_FILES['image_1']['tmp_name'];
    $image_1_size = $_FILES['image_1']['size'];
    $image_1_folder = 'uploaded_files/'.$rename_image_1;

    if(!empty($image_1)){
        if($image_1_size > 2000000){
            $warning_msg[] = 'image 1 size too large';
        }else{
            $update_image_1 = $conn->prepare("UPDATE `property`SET image_1 
            = ? WHERE id = ?");
            $update_image_1->execute([$rename_image_1, $update_id]);
            move_uploaded_file($image_1_tmp_name, $image_1_folder);
            if($old_image_1 != ''){
                unlink('uploaded_files/'.$old_image_1);
            }
        }
    }

    $old_image_2 = $_POST['old_image_2'];
    $old_image_2 = filter_var($old_image_2, FILTER_SANITIZE_STRING);
    $image_2 = $_FILES['image_2']['name'];
    $image_2 = filter_var($image_2, FILTER_SANITIZE_STRING);
    $image_2_ext = pathinfo($image_2, PATHINFO_EXTENSION);
    $rename_image_2 = create_unique_id().'.'.$image_2_ext;
    $image_2_tmp_name = $_FILES['image_2']['tmp_name'];
    $image_2_size = $_FILES['image_2']['size'];
    $image_2_folder = 'uploaded_files/'.$rename_image_2;

    if(!empty($image_2)){
        if($image_2_size > 2000000){
            $warning_msg[] = 'image 2 size too large';
        }else{
            $update_image_2 = $conn->prepare("UPDATE `property`SET image_2 
            = ? WHERE id = ?");
            $update_image_2->execute([$rename_image_2, $update_id]);
            move_uploaded_file($image_2_tmp_name, $image_2_folder);
            if($old_image_2 != ''){
                unlink('uploaded_files/'.$old_image_2);
            }
        }
    }

    $old_image_3 = $_POST['old_image_3'];
    $old_image_3 = filter_var($old_image_3, FILTER_SANITIZE_STRING);
    $image_3 = $_FILES['image_3']['name'];
    $image_3 = filter_var($image_3, FILTER_SANITIZE_STRING);
    $image_3_ext = pathinfo($image_3, PATHINFO_EXTENSION);
    $rename_image_3 = create_unique_id().'.'.$image_3_ext;
    $image_3_tmp_name = $_FILES['image_3']['tmp_name'];
    $image_3_size = $_FILES['image_3']['size'];
    $image_3_folder = 'uploaded_files/'.$rename_image_3;

    if(!empty($image_3)){
        if($image_3_size > 2000000){
            $warning_msg[] = 'image 3 size too large';
        }else{
            $update_image_3 = $conn->prepare("UPDATE `property`SET image_3 
            = ? WHERE id = ?");
            $update_image_3->execute([$rename_image_3, $update_id]);
            move_uploaded_file($image_3_tmp_name, $image_3_folder);
            if($old_image_3 != ''){
                unlink('uploaded_files/'.$old_image_3);
            }
        }
    }

    $old_image_4 = $_POST['old_image_4'];
    $old_image_4 = filter_var($old_image_4, FILTER_SANITIZE_STRING);
    $image_4 = $_FILES['image_4']['name'];
    $image_4 = filter_var($image_4, FILTER_SANITIZE_STRING);
    $image_4_ext = pathinfo($image_4, PATHINFO_EXTENSION);
    $rename_image_4 = create_unique_id().'.'.$image_4_ext;
    $image_4_tmp_name = $_FILES['image_4']['tmp_name'];
    $image_4_size = $_FILES['image_4']['size'];
    $image_4_folder = 'uploaded_files/'.$rename_image_4;

    if(!empty($image_4)){
        if($image_4_size > 2000000){
            $warning_msg[] = 'image 4 size too large';
        }else{
            $update_image_4 = $conn->prepare("UPDATE `property`SET image_4 
            = ? WHERE id = ?");
            $update_image_4->execute([$rename_image_4, $update_id]);
            move_uploaded_file($image_4_tmp_name, $image_4_folder);
            if($old_image_4 != ''){
                unlink('uploaded_files/'.$old_image_4);
            }
        }
    }

    $old_image_5 = $_POST['old_image_5'];
    $old_image_5 = filter_var($old_image_5, FILTER_SANITIZE_STRING);
    $image_5 = $_FILES['image_5']['name'];
    $image_5 = filter_var($image_5, FILTER_SANITIZE_STRING);
    $image_5_ext = pathinfo($image_5, PATHINFO_EXTENSION);
    $rename_image_5 = create_unique_id().'.'.$image_5_ext;
    $image_5_tmp_name = $_FILES['image_5']['tmp_name'];
    $image_5_size = $_FILES['image_5']['size'];
    $image_5_folder = 'uploaded_files/'.$rename_image_5;

    if(!empty($image_5)){
        if($image_5_size > 2000000){
            $warning_msg[] = 'image 5 size too large';
        }else{
            $update_image_5 = $conn->prepare("UPDATE `property`SET image_5 
            = ? WHERE id = ?");
            $update_image_5->execute([$rename_image_5, $update_id]);
            move_uploaded_file($image_5_tmp_name, $image_5_folder);
            if($old_image_5 != ''){
                unlink('uploaded_files/'.$old_image_5);
            }
        }
    }

    $update_listing = $conn->prepare("UPDATE `property` SET property_name = ?,
    price = ?, deposit = ?, address = ?, rating = ?, glazing = ?, band = ?,
    smoking = ?, heating = ?, offer = ?, type =?, furnished = ?,
    room = ?, bathroom = ?, description = ? WHERE id = ?");
    $update_listing->execute([$property_name, $price, $deposit, $address, 
    $rating, $glazing, $band, $smoking, $heating, $offer, $type, 
    $furnished, $room, $bathroom, $description, $update_id]);

    $success_msg[] = 'listing successfully updated!';


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_listing</title>
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
                        <a href="#">Accommodation</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="#">Signup/Login</a>
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

<div class="title">
        <h1 class="heading-title">Update Property</h1>
    </div>
    <section class="property-form">

        <?php
        $select_property = $conn->prepare("SELECT * FROM `property` WHERE property_id = ? LIMIT 1");
        $select_property->execute([$get_id]);
        if($select_property->rowCount() > 0){
            while($fetch_property = $select_property->fetch(PDO::FETCH_ASSOC)){

            $property_id = $fetch_property['property_id'];

        
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <h3>property details</h3>
            <input type="hidden" name="property_id" value="<?= $property_id; ?>">
            <input type="hidden" name="old_image_1" value="<?= $fetch_property
            ['image_1']; ?>">
            <input type="hidden" name="old_image_2" value="<?= $fetch_property
            ['image_2']; ?>">
            <input type="hidden" name="old_image_3" value="<?= $fetch_property
            ['image_3']; ?>">
            <input type="hidden" name="old_image_4" value="<?= $fetch_property
            ['image_4']; ?>">
            <input type="hidden" name="old_image_5" value="<?= $fetch_property
            ['image_5']; ?>">
            <div class="box">
                <p>property name</p>
                <input type="text" name="property_name" required placeholder="enter property name" class="input"
                value="<?= $fetch_property['property_name']; ?>">
            </div>
            <div class="flex">
                <div class="box">
                    <p>property price</p>
                    <input type="number" name="price" required placeholder="enter property price" class="input"
                    value="<?= $fetch_property['price']; ?>">
                </div>
                <div class="box">
                    <p>deposit</p>
                    <input type="number" name="deposit" required placeholder="enter deposit" class="input"
                    value="<?= $fetch_property['deposit']; ?>">
                </div>
                <div class="box">
                    <p>property address</p>
                    <input type="text" name="address" required placeholder="enter property address" class="input"
                    value="<?= $fetch_property['address']; ?>">
                </div>
                <div class="box">
                    <p>property epc rating</p>
                    <input type="text" name="rating" required placeholder="enter epc rating" class="input"
                    value="<?= $fetch_property['rating']; ?>">
                </div>
                <div class="box">
                    <p>property glazing</p>
                    <input type="text" name="glazing" required placeholder="enter property glazing" class="input"
                    value="<?= $fetch_property['glazing']; ?>">
                </div>
                <div class="box">
                    <p>council tax band</p>
                    <input type="text" name="band" required placeholder="enter council tax band" class="input"
                    value="<?= $fetch_property['band']; ?>">
                </div>
                <div class="box">
                    <p>smoking</p>
                    <select name="smoking" class="input" required>
                        <option value="<?= $fetch_property['smoking']; ?>"selected><?= 
                        $fetch_property['smoking']; ?></option>
                        <option value="yes"> yes</option>
                        <option value="no"> no</option>
                    </select>
                </div>
                <div class="box">
                    <p>central heating</p>
                    <select name="heating" class="input" required>
                        <option value="<?= $fetch_property['heating']; ?>"selected><?= 
                        $fetch_property['heating']; ?></option>
                        <option value="gas"> gas</option>
                        <option value="electric"> electric</option>
                    </select>
                </div>
                <div class="box">
                    <p>offer type</p>
                    <select name="offer" class="input" required>
                        <option value="<?= $fetch_property['offer']; ?>"selected><?= 
                        $fetch_property['offer']; ?></option>
                        <option value="sale"> sale</option>
                        <option value="rent"> rent</option>
                    </select>
                </div>
                <div class="box">
                    <p>property type</p>
                    <select name="type" class="input" required>
                        <option value="<?= $fetch_property['type']; ?>"selected><?= 
                        $fetch_property['type']; ?></option>
                        <option value="flat"> flat</option>
                        <option value="house"> house</option>
                    </select>
                </div>
                <div class="box">
                    <p>property status</p>
                    <select name="furnished" class="input" required>
                        <option value="<?= $fetch_property['furnished']; ?>"selected><?= 
                        $fetch_property['furnished']; ?></option>
                        <option value="unfurnished"> unfurnished</option>
                        <option value="furnished"> furnished</option>
                    </select>
                </div>
                <div class="box">
                    <p>how many bedroom</p>
                    <select name="room" class="input" required>
                        <option value="<?= $fetch_property['room']; ?>"selected><?= 
                        $fetch_property['room']; ?></option>
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
                <p>how many bathroom</p>
                <select name="bathroom" class="input" required>
                    <option value="<?= $fetch_property['bathroom']; ?>"selected><?= 
                        $fetch_property['bathroom']; ?></option>
                    <option value="1"> 1 bathroom</option>
                    <option value="2"> 2 bathrooms</option>
                    <option value="3"> 3 bathrooms</option>
                    <option value="4"> 4 bathrooms</option>
                    <option value="5"> 5 bathrooms</option>
                    <option value="6"> 6 bathrooms</option>
                </select>
            </div>
            <div class="box">
                <p>property description</p>
                <textarea name="description"  cols="30" rows="10" maxlength="1200" class="input"
                required placeholder="enter property description">
                <?= $fetch_property['description']; ?>"</textarea>
                </select>
            </div>
            <div class="box">
                <p>image 1</p>
                <img src="uploaded_files/<?= $fetch_property['image_1'];?>" alt="">
                <input type="file" name="image_1" class="input" accept="image/*" required>
            </div>
            <div class="flex">
                <div class="box">
                    <p>image 2</p>
                    <?php
                        if(!empty($fetch_property['image_2'])){
                            echo '<img src="uploaded_files/'
                            .$fetch_property['image_2'].'" alt="">';
                        }
                    ?>
                    <input type="file" name="image_2" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 3</p>
                    <?php
                        if(!empty($fetch_property['image_3'])){
                            echo '<img src="uploaded_files/'
                            .$fetch_property['image_3'].'" alt="">';
                        }
                    ?>
                    <input type="file" name="image_3" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 4</p>
                    <?php
                        if(!empty($fetch_property['image_4'])){
                            echo '<img src="uploaded_files/'
                            .$fetch_property['image_4'].'" alt="">';
                        }
                    ?>
                    <input type="file" name="image_4" class="input" accept="image/*" required>
                </div>
                <div class="box">
                    <p>image 5</p>
                    <?php
                        if(!empty($fetch_property['image_5'])){
                            echo '<img src="uploaded_files/'
                            .$fetch_property['image_5'].'" alt="">';
                        }
                    ?>
                    <input type="file" name="image_5" class="input" accept="image/*" required>
                </div>
            </div>
            <input type="submit" value="update property" name="update" class="btn">
        </form>
        <?php
        }
            }else{
                echo 'no property found!';
            }

        
        ?>

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