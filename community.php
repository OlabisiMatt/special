<?php

include 'component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){

    $post_id = create_unique_id();
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $sql = "INSERT INTO post (author, title, content)
    VALUES ('$author', '$title', '$content')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

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

    <section class="community">
        <div class="comment-container">
            <div class="wrapper">
                <form action="" method="post" >
                    <input type="text" class="name" name="author" placeholder="Author's name?">
                    <br>
                    <input type="text" class="name"  name="title" placeholder="Topic of Concern">
                    <br>
                    <textarea name="content" id="" cols="30" rows="10" class="message" placeholder="What is your question?"></textarea>
                    <br>
                    <button type="submit" class="btn" name="submit">Post</button>
                </form>
            </div>
        </div>
    </section>



    <!--Community start-->
    <div class="title">
        <h1 class="heading-title">Previous Posts</h1>
    </div>
    <section class="community">
        <div class="content">
            <?php
            
                $sql = "SELECT * FROM post";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                }
                }

            ?>
        </div>

        <div class="community-container">
            <div class="community-box">
                <h3 class="">Author: Teebooks</h3>
                <h3 class="">Topic: Spark it</h3>
                <p>Message: Lorem ipsum dolor, sit amet consectetur 
                    adipisicing elit. Magnam ipsum deserunt quas cum quae 
                    numquam optio? Nisi a est aspernatur sequi similique
                     voluptas nemo et voluptate neque officia, accusamus voluptatem</p>
                <div class="load-more"><a href="#" class="btn">more</a></div>
            </div>

            <div class="community-box">
                <h3 class="">Author: <?php echo $row['author']; ?></h3>
                <h3 class="">Topic: <?php echo $row['title']; ?></h3>
                <p>Message: <?php echo $row['content']; ?></p>
                <div class="load-more"><a href="#" class="btn">more</a></div>
            </div>

        </div>
        

    </section>
    <!--Community Ends-->


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