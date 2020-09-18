 <?php
include("connection.php");
session_start();
if($_SESSION['username'] == ""){
    header("Location:index.php");
}else{
    
if(isset($_POST['but_upload'])){
 
$username = $_POST['username'];
$password = $_POST['password'];

  $sql = "Update admin Set username ='$username',password = '$password' Where id ='1'";   
  $result = mysqli_query($conn, $sql);
  if(!$result){
      echo "Invalid change account.";
  }else{
   }
  
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Triskelion</title>
                <link rel="icon" href="img/tris.png">

        <style>
            *{
                font-family: tahoma;
                color:white
            }
            input{
                height:35px;
                width:380px;
                font-size: 15px;
                color:black;
            }
            select,option{
                height:30px;
                width: 97px;
                color:black;
            }
            button{
                color:black;
            }
        </style>
        <script>
            function validate(){
             var n = document.getElementById("username").value;                   
             var add = document.getElementById("password").value;
          
          if(n == "" || n == null || add == "" || add == null){
              
                 alert("Please input username or password.");
                 return false;
             }else{
                 alert("Successfully change. Thank you");
                 return true;
             }
             
             
            }
            </script>
            
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
            <a href="home.php"><button style="height: 30px;width:260px">ADD MEMBERS</button></a><br/>
            <a href="records.php"><button style="height: 30px;width:260px">RECORDS</button><br/></a>
             <a href="admin.php"><button style="height: 30px;width:260px;background-color: white">ADMIN ACCOUNT</button><br/></a>
             <button onclick="myFunction()" style="height: 30px;width:260px">LOG OUT</button> 
        </div>
        <div style="margin: 0 auto;height: 500px;width:800px;border:1px solid black;border-radius: 5px;margin-top: -420px">
            <h2 style="color:white">&nbsp;Change Account</h2>
            <form method="POST" action="" onsubmit="return validate()">
                <table style="margin-left:80px">
                     <tr>
                        <td>Username:</td>
                        <td><input type="text" placeholder="username" name="username" id="username"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" placeholder="password" name="password" id="password"/></td>
                    </tr>
                      <tr>
                        <td> </td>
                        <td><button type="submit" name="but_upload" style="height: 35px;width:200px"> Save Change </button></td>
                    </tr>
                    
                </table>
            </form>
            <br/>
             <br/>
            <table style="margin:0 auto;text-align: center">
                <tr>
                    
               
                <td style="width:220px;text-align: center;background-color: whitesmoke;color:black;height:30px ">USERNAME</td>
                             <td style="width:220px;text-align: center;background-color: whitesmoke;color:black;height:30px ">PASSWORD</td>
            </tr>
               <?php
                  include ("connection.php");                
                $query = "Select * From admin";
                $result = mysqli_query($conn, $query);    
                $count=0;
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo"<tr>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['password'] . "</td>
                        </tr>";
                       
    }                
}              
                 ?>
            </table>
        </div>
        
    </body>
</html>
