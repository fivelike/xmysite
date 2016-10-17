<?php

    $db = new mysqli('localhost','root','','xmy');
    if(mysqli_connect_errno()){
        echo 'error'
        exit;
    }

    $username = $_POST['user'];
    $password = $_POST['passwd'];
    echo '<h1 align=center> Register Success!';
    echo '<br>';
    echo '<h2 align=center>Welcome '.$username.'!<h2>';

?>
