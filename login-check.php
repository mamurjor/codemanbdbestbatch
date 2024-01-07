<?php 
session_start();
require("config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query = "SELECT * from user
WHERE email ='$email'  and password='$password' and status='done'";

if($conn==true){
    $query="SELECT * from user
    WHERE email ='$email' and password='$password'";
    $sql=mysqli_query($conn,$query);

 

//    echo $rows['username'];
//    echo $rows['email'];
//    echo $rows['password'];
$rowcount = mysqli_num_rows($sql);

$rows= mysqli_fetch_assoc($sql);
    if($rowcount>0){
        if($rows['email']==$email && $rows['password']==$password){
           

            $_SESSION['username']=$rows['username'];
            header("location: dashboard.php?msg=success");
        
           }
           else{
            header("location: login.php?msg=Sorry");
           }
    }
    else{
        header("location: login.php?msg=Sorry");
    }
   
}









// mysqli_num_rows







/// username = "admin@gmail.com" and password =123





?>