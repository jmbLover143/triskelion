<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("connection.php");
echo "$_REQUEST[id]";
        
$sql = "DELETE from members Where id = '$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "Invalid delete.";
}else{
    header("Location:records.php");
}

?>