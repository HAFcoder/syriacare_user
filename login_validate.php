<?php
    session_start();
    if($_POST['username']!="" && $_POST['password']!=""){

        $username = $_POST['username'];
        $password = $_POST['password'];

        //print($username . " - " . $password);

        $_SESSION['user_name'] = $username;
        $_SESSION['user_id'] = $password;

        header("Location: index.php"); 

    }else{

        header("Location: login.php"); 

    }


?>