<?php
/**
 * Created by PhpStorm.
 * User: shrik3
 * Date: 10/5/16
 * Time: 11:26 PM
 */

// 这个脚本用于处理排练室预约

session_start()
if(!isset($_SESSION['valid_user'])){
    echo "<h1 align=center>PLEASE LOGIN FIRST =w=</h1>";
}else{
    $username = $_SESSION['valid_user'];
    $from = trim($_POST['from']);
    $to = trim($_POST['to']);

    if (!$from||!$to){
        echo "<h1 align=center>robot, are you kidding me?</h1>";
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
