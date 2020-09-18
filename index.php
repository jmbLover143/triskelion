<?php
session_start();
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
                height:30px;
                width:300px;
                font-size: 15px;
                color:black;
            }
            button{
                color:black;
                height:30px;
            }
        </style>
        <script>
            function validate(){
             var user = document.getElementById("username").value;                   
             var pass = document.getElementById("password").value;
             
             if(user == "" || user == null || pass == "" || pass == null){
                 alert("Please input username or password.!");
                 return false;
             }else{
                 alert("Welcome admin.");
                 return true;
             }
             
             
            }
            </script>
    </head>
    <body style="background-color:black;">
        <br/>
        <div style="margin: 0 auto;height: 500px;width:400px;border:0px solid black;border-radius: 5px">
            <br/>
            <center><img style="margin: 0 auto;margin-left: -200px" src="img/tao.jpg"/></center>
            <form action="check.php" method="POST" onsubmit="return validate()">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input placeholder="username" type="text" name="username" id="username"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input placeholder="password" type="password" name="password" id="password"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button name="button" type="submit" style="float: right;width:100px"> LOG IN </button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
