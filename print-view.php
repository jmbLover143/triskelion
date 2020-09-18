 <?php
include("connection.php");
session_start();
if($_SESSION['username'] == ""){
    header("Location:index.php");
} 
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Triskelion</title>
        <script src="print.js"></script>
                        <link rel="icon" href="img/tris.png">

        <style>
            *{
                font-family: tahoma;
                color:white;
            }
            input{
                height:30px;
                width:300px;
                font-size: 15px;
            }
            select,option{
                height:30px;
                width: 97px;
            }
             
            button{
                color:black;
            }
            body {
         background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }
        </style>
        <script>
function myFunction() {
  var txt;
  var r = confirm("Are you sure you want to logout ?");
  if (r == true) {
    alert("Thank you.");
    location.replace("logout.php")
  } else {
     
  }
 }
</script>
    </head>
    <body style=" ">
        <div style="float:">
           
        </div>
        <?php
        include("connection.php");
         $id = $_REQUEST['id'];
  
 $sql = "SELECT * FROM members Where id = '$id'";
 $result = mysqli_query($conn, $sql);
 
 $row = mysqli_fetch_array($result);
 
 $name = $row['name'];
 $address = $row['address'];
$age = $row['age'];
$birth = $row['birth'];
$alias = $row["alias"];
$chapter = $row["chapter"];
$gt = $row["gt"];
$mi = $row["mi"];
$welcome = $row["welcome"];
$image = $row["image"];
        ?>
         <br>
        <div id="slip">
           
          <div style=" margin: 0 auto;height: 540px;width:800px;border:0px solid black;border-radius: 5px;margin-top: -00px;  ">
            <center>
                <img style="height: 540px;width:800px; " src="img/Solid_black.png"/>
                <img style="margin: 0 auto;height:300px;position:absolute;margin-left: -110px;margin-top: -540px" src="img/tris.PNG "/>
            </center>
            <img style="position:absolute;height:180px;width:180px; margin-top: -280px;margin-left: 540px" src="images/<?php echo $image?>"/>
            <br/>
            <table style="margin-left: 80px;margin-top: -280px">
                <tr>
                    <td>Name: <?php echo $name?></td>
                </tr>
                <tr>
                    <td>Address: <?php echo $address?></td>
                </tr>
                <tr>
                    <td>Age: <?php echo $age?></td>
                </tr>
                <tr>
                    <td>Triskelion Birth: <?php echo $birth?></td>
                </tr>
                <tr>
                    <td>Alias: <?php echo $alias?></td>
                </tr>
                <tr>
                    <td>Alma Mater Chapter: <?php echo $chapter?></td>
                </tr>
                <tr>
                    <td>GT: <?php echo $gt?></td>
                </tr>
                <tr>
                    <td>MI: <?php echo $mi?></td>
                </tr>
                <tr>
                    <td>Welcome Chapter (optional): <?php echo $welcome?></td>
                </tr>
            </table>
         </div>
             </div>
         <a href="records.php"><button style="margin-top: -150px;margin-left: 100px;height: 30px;width: 150px"  class="btn btn-primary">BACK TO RECORDS</button> </a>
   <br/>
         <button style="margin-top: -200px;margin-left: 100px;height: 30px;width: 150px"  onclick="printContent('slip')" class="btn btn-primary">PRINT</button> 
    </body>
</html>
