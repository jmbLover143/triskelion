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
                <link rel="icon" href="img/tris.png">
                  <script>
            function validate(){
             var n = document.getElementById("n").value;                   
            
             if(  n == "" || n == null){
                 alert("Please input triskelion birth.!");
                 return false;
             }else{
                  
             }
             
             
            }
            </script>

        <style>
            *{
                font-family: tahoma;
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
            tr:hover{
                background-color: whitesmoke;
                color:black;
            }
            tr{
                color:white;
            }
            button{
                color:black;
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
    <body style="background-color:black">
        <div style="float:">
            <img style="margin: 0 auto;height:350px;width:270px" src="img/tao2.jpg"/>
            <br>
            <a href="home.php"><button style="height: 30px;width:260px ">ADD MEMBERS</button></a><br/>
            <button style="height: 30px;width:260px;background-color: white">RECORDS</button><br/>
             <a href="admin.php"><button style="height: 30px;width:260px">ADMIN ACCOUNT</button><br/></a>
             <button onclick="myFunction()" style="height: 30px;width:260px">LOG OUT</button> 
     
            <div style="margin: 0 auto;height: 600px;width:1000px;border:1px solid black;border-radius: 5px;margin-top: -430px;overflow: scroll;float: right">
           <h2 style="color:white">All records</h2>
           <form action="search.php" method="POST" onsubmit="return validate()">
               <h3 style="color:white"><input name="n" id="n" placeholder="type here.." type="number" style="width:100px"><button type="submit" name="submit" style="width:160px;height:31px">Triskelion birth</button></h3>
           </form>
               <table style="text-align:center">
                <tr>
                             <td style="width:300px;background-color: whitesmoke;text-align: center;height:30px;color:black "> NAME</td>
                             <td style="width:180px;text-align: center;background-color: whitesmoke;color:black ">ACTION</td>
                             <td style="width:150px;text-align: center;background-color: whitesmoke;color:black ">ACTION</td>
                             <td style="width:150px;text-align: center;background-color: whitesmoke;color:black ">ACTION</td>
                             <td style="width:150px;text-align: center;background-color: whitesmoke;color:black ">ACTION</td>
                 </tr>
                 <?php
                  include ("connection.php");                
                $query = "Select id,name,address,age,birth,alias,chapter,gt,mi,image,welcome From members order by name ASC";
                $result = mysqli_query($conn, $query);    
                $count=0;
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo"<tr>
                        <td>" . $row['name'] . "</td>
                        <td><a href='profile.php?welcome=$row[welcome]&id=$row[id]&name=$row[name]&address=$row[address]&age=$row[age]&birth=$row[birth]&alias=$row[alias]&chapter=$row[chapter]&gt=$row[gt]&mi=$row[mi]&image=$row[image]'><button style='width:120px;height:30px' name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'>VIEW</button></td></a>
                        <td><a href='update-view.php?welcome=$row[welcome]&id=$row[id]&name=$row[name]&address=$row[address]&age=$row[age]&birth=$row[birth]&alias=$row[alias]&chapter=$row[chapter]&gt=$row[gt]&mi=$row[mi]&image=$row[image]'><button style='width:120px;height:30px' name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'>UPDATE</button></td></a>
                       <td><a href='print-view.php?welcome=$row[welcome]&id=$row[id]'><button style='width:120px;height:30px' name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'>PRINT</button></td></a>
                        <td><a href='delete.php?welcome=$row[welcome]&id=$row[id]'><button style='width:120px;height:30px' name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'>DELETE</button></td></a>
                         
</tr>";
                        $count = $count + 1;
    }                
}              
                 ?>
            </table>
         </div>
             <center><h3 style="color:white; ">Total records: <?php echo $count?> </h3></center>
                

     </body>
</html>
