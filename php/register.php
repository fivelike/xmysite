<?php
include 'function.php';
   // print_r($_POST);

    $username = trim($_POST['username']);
    $nickname = trim($_POST['nickname']);
    $password = trim($_POST['passwd']);

    if (!$username||!$nickname||!$password){
        // echo "<h1 align=center>Check your form</h1>";
        return show(0,'Check your form');
    }

    if (!get_magic_quotes_gpc()){
        $username = addslashes($username);
        $nickname = addslashes($nickname);
        $password = addslashes($password);

    }

    @ $db = new mysqli('localhost','test','test','xmy');
    if(mysqli_connect_errno()){
        // echo 'error';
        return show(0,'error');

        exit;
    }



    $query = "INSERT INTO accounts (username,nickname,password)
              VALUES ('$username','$nickname','$password')";
    $result = $db->query($query);

    if ($result) {
        // echo $db->affected_rows."registered!";
        // echo '<h1 align=center> Register Success!';
        // echo '<br>';
        // echo '<h2 align=center>Welcome '.$username.'!<h2>';
        return show(1,'注册成功，欢迎加入小觅音');
    } else {
        // echo "ERROR!";
         return show(0,'error');
    }


    $db->close();


?>
