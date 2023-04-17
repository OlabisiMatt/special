<?php

include 'component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
    header('location:login.php');
}

if(isset($_POST['delete'])){

    $delete_id = $_POST['property_id']
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `property` WHERE id = ?");
    $verify_delete->execute([$delete_id]);

    if($verify_delete->row() > 0){
        $select_images = $conn->prepare("SELECT * FROM `property` WHERE id = ? LIMIT 1");
        $select_images->execute([$delete_id]);
        $fetch_images = $select_images->fetch(PDO::FETCH_ASSOC);
        $delete_image_1 = $fetch_images['image_1'];
        $delete_image_2 = $fetch_images['image_2'];
        $delete_image_3 = $fetch_images['image_3'];
        $delete_image_4 = $fetch_images['image_4'];
        $delete_image_5 = $fetch_images['image_5'];

        unlink('uploaded_files/'.$delete_image_1);

        if(!empty($delete_image_2)){
            unlink('uploaded_files/'.$delete_image_2); 
        }

        if(!empty($delete_image_3)){
            unlink('uploaded_files/'.$delete_image_3); 
        }

        if(!empty($delete_image_4)){
            unlink('uploaded_files/'.$delete_image_4); 
        }

        if(!empty($delete_image_5)){
            unlink('uploaded_files/'.$delete_image_5); 
        }

    }else{
        $warning_msg[] = "listing deleted already"
    }

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

    <!--my listing start-->
    <div class="title">
        <h1 class="heading-title">My Listing</h1>
    </div>

    <secction class="my-listing">

        <div class="box-container">

        <?php
            $select_accommodation = $conn-> prepare("SELECT * FROM `property` WHERE 
            user_id = ? ORDER BY date DESC");
            $select_accommodation->execute([$user_id]);
            if($select_accommodation->rowCount() > 0){
                while($fetch_accommodation = $select_accommodation->fecth(PDO::FETCH_ASSOC)){

                $accommodation_id = $fecth_accommodation['user_id'];

                if(!empty($fetch_accommodation['image_2'])){
                    $image_2 = 1;
                }else{
                    $image_2 = 0;
                }
                if(!empty($fetch_accommodation['image_3'])){
                    $image_3 = 1;
                }else{
                    $image_3 = 0;
                }
                if(!empty($fetch_accommodation['image_4'])){
                    $image_4 = 1;
                }else{
                    $image_4 = 0;
                }
                if(!empty($fetch_accommodation['image_5'])){
                    $image_5 = 1;
                }else{
                    $image_5 = 0;
                }

                $total_images = (1 + $image_2 + $image_3 + $image_4 + $image_5);

        ?>
        <form action="" method="POST" class="box">
            <input type="hidden" name="property_id" value="<?= $accommodation_id; ?>">
            <div class="thumb">
                <p><i class="far fa-image"></i><span><?= $total_images?></span></p>
                <img src="uploaded_files/<?= $fetch_accommodation['image_1'];?>" alt="">
            </div>
            <div class="price"><i class="fas fa-gbp-sign"></i><?= $fetch_accommodation['price'];?></div>
            <h3 class="name"><?= $fetch_accommodation['property_name'];?></h3>
            <p class="address"><i class="fas fa-map marker-alt"></i><?= $fecth_accommodation['address'];?></p>
            <div class="flex-btn">
                <a href="update_property.php?get_id=<? $accommodation_id; ?>" class="btn">update</a>
                <input type="submit" value="delete" name="delete" class="btn" onclick="return confirm('delete this listing?');">
            </div>
            <a href="view_property.php?get_id=<?= $accommodation_id?>" class="btn">view property</a>
        </form>


        <?php
            }

        }else{
            echo 'no listing found';
        }
        ?>

        </div>

    </secction>


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