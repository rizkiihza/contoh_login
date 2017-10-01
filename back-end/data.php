<?php
    session_start();
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contoh1";

    // Create connection
    $conn=new mysqli($servername,$username,$password,$dbname);
    
    if(!$conn){
      die("connection fail".mysqli_connect_error());
    }
    
   //query for auth
   $sql="SELECT * FROM  user WHERE username='$user' AND password='$pass'";
   $result=$conn->query($sql);

   //getting rows from query
   if(mysqli_num_rows($result)){
    $_SESSION["username"]=$user;
    if($_SESSION["username"]){ 
     header("Location:../front-end/home.php");
    }
  }
  else{
      header("Location:../index.php");
  }


    $conn->close();
 ?>