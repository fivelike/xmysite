<?php


    $username = trim($_POST['username']);
    $nickname = trim($_POST['nickname']);
    $password = trim($_POST['passwd']);

    if (!$username||!$nickname||!$password){
        echo "<h1 align=center>Check your form</h1>";
    }

    if (!get_magic_quotes_gpc()){
        $username = addslashes($username);
        $nickname = addslashes($nickname);
        $password = addslashes($password);

    }

    @ $db = new mysqli('localhost','root','H','xmy');
    if(mysqli_connect_errno()){
        echo 'error';
        exit;
    }



    $query = "INSERT INTO accounts (username,nickname,passdw)
              VALUES ('$username','$nickname','$password')";
    $result = $db->query($query);

    if ($result) {
        echo $db->affected_rows."registered!";
        echo '<h1 align=center> Register Success!';
        echo '<br>';
        echo '<h2 align=center>Welcome '.$username.'!<h2>';
    } else {
        echo "ERROR!";
    }


    $db->close();


?>
