<?php

include '../component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}




if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $verify_user = $conn->prepare("SELECT * FROM `owner` WHERE email = ? AND password = ? LIMIT 1");
    $verify_user->execute ([$email, $password]);
    $row = $verify_user->fetch(PDO::FETCH_ASSOC);

    if($verify_user->rowCount() > 0){
        setcookie('id', $row['id'], time() + 60*60*24*30, '/');
        
        header('location:ohome.php');
    }else{
        $warning_msg[] = 'wrong email or password!';
    }
    

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css"/>
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
                        <a href="signup.php">SignUp</a>
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

    <div class="title">
        <h1 class="heading-title">Login</h1>
    </div>
    <section class="form-container">
        <form action="" method="POST">
            <input type="email" name="email" required placeholder="Email" 
            class="box">
            <input type="password" name="password" required placeholder="Password" 
            class="box">
            <p>don't have an account? <a href="osignup.php">signup now</a></p>
            <input type="submit" value="Sign in" name="submit" class="btn">
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