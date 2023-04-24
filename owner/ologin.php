<?php

include '../component/connect.php';

// if (isset($_COOKIE['user_id'])) {
//     $user_id = $_COOKIE['user_id'];
// }else{
//     $user_id = '';
// }

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $c_password = hash('sha256', $_POST['password']);
    $_auth = hash('sha256', $email.$c_password);
    $sql = 'SELECT c_password, email, _auth FROM owner2 WHERE _auth = ? ';
    $verify_user = $conn->prepare($sql);
    $verify_user->execute([$_auth]);

    if ($verify_user->rowCount() == 1) {
        $row = $verify_user->fetch(PDO::FETCH_ASSOC);
        if ($row['email'] == $email && $row['_auth'] == $_auth) {
            // User is authenticated
            setcookie('id', $row['id'], time() + 60*60*24*30, '/');
            header('location:ohome.php');
            exit();
        } else {
            // User is not authenticated
            $warning_msg[] = 'wrong email or password!';
        }
    } else {
        // User is not authenticated
        $warning_msg[] = 'wrong email or password!';
    }

    // if($verify_user->rowCount() > 0){
    //     echo 'setting cookies';
    //     setcookie('id', $row['id'], time() + 60*60*24*30, '/');

    //     header('location:ohome.php');
    //     exit();
    //     // redirect_to('ohome.php');
    // }else{
    //     $warning_msg[] = 'wrong email or password!';
    // }


}

?>
