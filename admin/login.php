<?php

session_start();
if(isset($_SESSION['adminID'])){
    header("location:dashboard.php");


}
if(isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['submit']) && !empty($_POST['submit'])){

    require "./includes/db.con.php";
    if($conn){
        $userid=mysqli_real_escape_string($conn,$_POST['userid']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $query="select * from admin_user where user_id='$userid' and password='$password'";

        $res=mysqli_query($conn,$query);
    
        if(mysqli_num_rows($res)>0){

            $row=mysqli_fetch_assoc($res);
          

            $_SESSION['adminID']=$row['id'];
            $_SESSION['adminUSERID']=$row['user_id'];
            $_SESSION['adminPASSWORD']=$row['password'];

            header("location:dashboard.php");

        }
        else{
            echo"<script>alert('user id and password incorrect')</script>";


        }
        

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
                <h3>Quotes Of the Day</h3>
        </div>
        <div class="loginDetails">
            <h2>Admin Login</h2>
            <form action="" method="post">
                <label for="userid">User ID</label>
                <input type="text" name="userid" id="userid">
                <br>
                <label for="password">Password</label>
                
                <input type="password" name="password" id="password">
                <br>
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
        <div class="footer">

        </div>
    </div>
</body>
</html>