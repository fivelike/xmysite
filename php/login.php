<?php

    session_start();

    $username = trim($_POST['username']);
    $password = trim($_POST['p']);

    if (!$username||!$password){
        echo "<h1 align=center>Check your form</h1>";
    }

    if (!get_magic_quotes_gpc()){
        $username = addslashes($username);
        $password = addslashes($password);

    }

    @ $db = new mysqli('localhost','root','H','xmy');
    if(mysqli_connect_errno()){
        echo 'error';
        exit;
    }



    $query = "select count(*) from accounts where
              username = '".$username."' and
              password = '".$password."'
              ";

    $result = $db->query($query);

    if (!$result) {
        echo 'failed to query the database';
        exit;
    }

    $row = mysqli_fetch_row($result);
    $count = $row[0];

    if($count > 0) {
        echo "<h1 align=center>LOGIN SUCCESS</h1>";
        $_SESSION['valid_user'] = $username;
    } else{
        echo 'AUTH FAILED';
    }


    $db->close();
