<?php

include '../component/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
}else{
    $user_id = '';
}




if(isset($_POST['submit'])){

    $id = create_unique_id();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = hash('sha256', $_POST['password']);
    $c_password = hash('sha256', $_POST['c_password']);
    $_auth = hash('sha256', $email.$c_password);



    $select_email = $conn->prepare("SELECT * FROM owner2 WHERE  email = ?");
    $select_email-> execute([$email]);

    if ($select_email->rowCount() > 0) {
        $warning_msg[] = 'email already taken!';
    }else{
        if($password != $c_password){
            $warning_msg[] = 'incorrect password';
        }else{
            $insert_user = $conn->prepare("INSERT INTO owner2 (id, firstname,
             lastname, email, phone, c_password, _auth) VALUES(?,?,?,?,?,?,?)");
            $insert_user->execute([$id, $firstname, $lastname, $email, $phone, $c_password, $_auth]);

            // if($insert_user){
            //     $verify_user = $conn->prepare("SELECT * FROM property_owner WHERE email = ? AND password = ? LIMIT 1");
            //     $verify_user->execute ([$email, $c_password]);
            //     //$row = $verify_user->fetch(PDO::FETCH_ASSOC);

            //     if($verify_user->rowCount() > 0){
            //         setcookie('user_id', $row['user_id'], time() + 60*60*24*30, '/');
            //         $success_msg[] = 'Account Created Successfully';
            //         header('location:ologin.html');
            //         exit();
            //     }else{
            //         $error_msg[] = 'something went wrong!';
            //     }

            // }
        }

    }

}

?>