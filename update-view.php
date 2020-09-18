 <?php
include("connection.php");
session_start();
if($_SESSION['username'] == ""){
    header("Location:index.php");
}else{
    
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
   $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
 $n = $_POST['n'];
$address = $_POST['address'];
$age = $_POST['age'];
$month = $_POST['month'];
$date = $_POST['date'];
$year = $_POST['year'];
$alias = $_POST['alias'];
$chapter = $_POST['chapter'];
$gt = $_POST['gt'];
$mi = $_POST['mi'];
$id = $_POST['id'];
echo "$id";

$birth = $month. " ".$date.", ".$year;

    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name); 
    
    // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  
   // Check extension
  if( in_array($imageFileType,$extensions_arr) ){       
      
      $sql = "UPDATE members SET name='$n',address='$address',age='$age',birth='$birth',alias='$alias',chapter='$chapter',gt='$gt',mi='$mi',image='$name' Where id='$id'";
       $result = mysqli_query($conn, $sql);
       if(!$result){
           echo "Error";
       }else{
           header("Location: records.php");
       }
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
                color:white;
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
             var n = document.getElementById("n").value;                   
             var add = document.getElementById("address").value;
             var age = document.getElementById("age").value;
             var alias = document.getElementById("alias").value;
             var chapter = document.getElementById("chapter").value;
             var gt = document.getElementById("gt").value;
             var mi = document.getElementById("mi").value;
             var file = document.getElementById("file").value;
             
             if(file == "" || file == null || n == "" || n == null || add == "" || add == null || age == "" || age == null || alias == "" || alias == null || chapter=="" || chapter == "" || gt == "" || gt == null || mi == "" || mi == null){
                 alert("Please input all required fields. .");
                 return false;
             }else{
                 alert("Successfully update member. Thank you");
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
            <a href="home.php"><button style="height: 30px;width:260px; ">ADD MEMBERS</button></a><br/>
            <a href="records.php"><button style="height: 30px;width:260px">RECORDS</button><br/></a>
             <a href="admin.php"><button style="height: 30px;width:260px">ADMIN ACCOUNT</button><br/></a>
             <button onclick="myFunction()" style="height: 30px;width:260px">LOG OUT</button> 
        <div style="margin: 0 auto;height: 500px;width:800px;border:1px solid black;border-radius: 5px;margin-top: -420px">
            <h2>&nbsp;Update member</h2>
            <form method="POST" action="" enctype='multipart/form-data' onsubmit="return validate()">
                
                <input name="id" type="hidden" value="<?php echo  $_REQUEST['id']?>"/>
                <table style="margin-left:80px">
                     <tr>
                        <td>Name:</td>
                        <td><input type="text" value="<?php echo $_REQUEST['name']?>" name="n" id="n"/></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" value="<?php echo $_REQUEST['address']?>" name="address" id="address"/></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input value="<?php echo $_REQUEST['age']?>" type="number"  name="age" id="age"/></td>
                    </tr>
                    <tr>
                        <td>Triskelion Birth:</td>
                        <td>
                            <select name="month">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option> 
                            </select>
                            <select name="date">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option> 
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>  
                                <option></option>
                             </select>
                            <select  name="year">
                                <option>2026</option>
                                <option>2025</option>
                                <option>2024</option>
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>  
                                <option>2011</option>  
                                <option>2010</option>  
                                <option>2009</option>
                                <option>2008</option>  
                                <option>2007</option>  
                                <option>2006</option>  
                                <option>2005</option>  
                                <option>2004</option>  
                                <option>2003</option>  
                                <option>2002</option>  
                                <option>2001</option>  
                                <option>2000</option>  
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                                <option>1989</option>
                                <option>1988</option>
                                <option>1987</option>
                                <option>1986</option>
                                <option>1985</option>
                                <option>1984</option>
                                <option>1983</option>
                                <option>1982</option>
                                <option>1981</option>
                                <option>1980</option>
                                <option>1979</option>
                                <option>1978</option>
                                <option>1977</option>
                                <option>1976</option>
                                <option>1975</option>
                                <option>1974</option>
                                <option>1973</option>
                                <option>1972</option>
                                <option>1971</option>
                                <option>1970</option>
                                <option>1969</option>
                                <option>1968</option>
                                <option>1967</option>
                                <option>1966</option>
                                <option>1965</option>
                                <option>1964</option>
                                <option>1963</option>
                                <option>1962</option>
                                <option>1961</option>
                                <option>1960</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alias:</td>
                        <td><input type="text" value="<?php echo $_REQUEST['alias']?>" name="alias" id="alias"/></td>
                    </tr>
                    <tr>
                        <td>Alma Mater Chapter:</td>
                        <td><input type="text" value="<?php echo $_REQUEST['chapter']?>" name="chapter" id="chapter"/></td>
                    </tr>
                    <tr>
                        <td>GT:</td>
                        <td><input type="gt" value="<?php echo $_REQUEST['gt']?>" name="gt" id="gt"/></td>
                    </tr>
                    <tr>
                        <td>MI:</td>
                        <td><input value="<?php echo $_REQUEST['mi']?>" type="text"  name="mi" id="mi"/></td>
                    </tr>
                    <tr>
                        <td>Welcome Chapter(optional):</td>
                        <td><input value="<?php echo $_REQUEST['welcome']?>" type="text"  name="welcome" id="welcome"/></td>
                    </tr>
                    <tr>
                    <td><p>Select image: </p></td>
                    <td><input style="height:30px;color:white" type='file' name='file' id="file" /></td>
            </tr>
                    <tr>
                        <td></td>
                        <td><input style="width:200px" type='submit' value='Save' name='but_upload'></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>  
                         
                     
                </table>
            </form>
            <br/>
            <center>
                <a href="records.php"><button style="width:150px;height: 35px;margin-left: -80px">BACK</button></a>
            </center>
        </div>
        
    </body>
</html>
