<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include("connection.php");
 
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from admin Where username = '$username' AND password ='$password'";
    $result = mysqli_query($conn, $sql);    
    $found = 0;
    while (mysqli_fetch_array($result)) {
        $found = 1;
    }
    if($found == 1){
        $_SESSION['username'] = $_POST['username'];
        header("Location:home.php");
    }else{
        header("Location:login-error.php");
     }
 
?>