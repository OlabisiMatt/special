<?php

include 'component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}
header('location:login.php');


if(isset($_POST['submit'])){
    
    $user_id = create_unique_id();
    $firstname = $_POST['firstname'];
    $firtname = filter_var($firstname, FILTER_SANITIZE_STRING);
    $lastname = $_POST['lastname'];
    $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $phone = $_POST['phone'];
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $c_password = sha1($_POST['c_password']);
    $c_password = filter_var($c_password, FILTER_SANITIZE_STRING);


    $select_email = $conn->prepare("SELECT * FROM `user` WHERE  email = ?");
    $select_email-> execute([$email]);

    if ($select_email->rowCount() > 0) {
        $warning_msg[] = 'email already taken!';
    }else{
        if($password != $c_password){
            $warning_msg[] = 'incorrect password';
        }else{
            $insert_user = $conn->prepare("INSERT INTO `user`(user_id, firstname,
             lastname, email, phone, password) VALUES(?,?,?,?,?,?)");
            $insert_user->execute([$user_id, $firstname, $lastname, $email, $phone, $c_password]);

            if($insert_user){
                $verify_user = $conn->prepare("SELECT * FROM `user` WHERE email = ? AND password = ? LIMIT 1");
                $verify_user->execute ([$email, $c_password]);
                $row = $verify_user->fetch(PDO::FETCH_ASSOC);

                if($verify_user->rowCount() > 0){
                    //setcookie('user_id', $row['user_id'], time() + 60*60*24*30, '/');
                    
                    $success_msg[] = 'Account Created Successfully';
                    
                }else{
                    //$error_msg[] = 'something went wrong!';
                }

            }
        }

    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css"/>
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
                        <a href="home.php">Home</a>
                    </li>

                    <li>
                        <a href="#">Signin</a>
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
        <h1 class="heading-title">Sign Up</h1>
    </div>
    <section class="form-container">
        <form action="" method="POST">
            <h3>create an account now</h3>
            <input type="text" name="firstname" required placeholder="First Name" 
            class="box">
            <input type="text" name="lastname" required placeholder="Last Name" 
            class="box">
            <input type="email" name="email" required placeholder="Email" 
            class="box">
            <input type="phone" name="phone" required placeholder="Phone" 
            class="box">
            <input type="password" name="password" required placeholder="Password" 
            class="box">
            <input type="password" name="c_password" required placeholder="Confirm Password" 
            class="box">
            <p>already have an account? <a href="login.php">login now</a></p>
            <input type="submit" value="SignUp" name="submit" class="btn">
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