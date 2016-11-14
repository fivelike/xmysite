<?php
session_start();
include 'function.php';
    // print_r($_POST);

    $username = trim($_POST['username']);
    $password = trim($_POST['p']);

    if (!$username||!$password){
        // echo "<h1 align=center>Check your form</h1>";
        return show(0,'用户名或密码为空');
    }

    if (!get_magic_quotes_gpc()){
        $username = addslashes($username);
        $password = addslashes($password);

    }

    @ $db = new mysqli('localhost','test','test','xmy');
    if(mysqli_connect_errno()){
        // echo 'error';
        return show(0,'error');
        exit;
    }



    $query = "select count(*) from accounts where
              username = '".$username."' and
              password = '".$password."'
              ";

    $result = $db->query($query);

    if (!$result) {
        // echo 'failed to query the database';
        return show(0,'failed to query the database');
        exit;
    }

    $row = mysqli_fetch_row($result);
    $count = $row[0];

    if($count > 0) {
        // echo "<h1 align=center>LOGIN SUCCESS</h1>";
        $_SESSION['valid_user'] = $username;
        return show(1,'登陆成功啦！');
    } else{
        // echo 'AUTH FAILED';
        return show(0,'该用户不存在！');
    }


    $db->close();
