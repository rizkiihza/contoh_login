<?php
  $user=$_POST['name'];
  $pass1=$_POST['pass1'];
  $pass2=$_POST['conpass'];

  if($pass1==$pass2 && $pass1!=""){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contoh1";

    // Create connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
      die("connection fail".mysqli_connect_error());
    }

    $sql="INSERT INTO user(username,password) VALUES ('$user','$pass1') ";

    if(mysqli_query($conn,$sql)){
      header('location:../index.php');
    }


    $conn->close();
    
  }
  else{
    header('location:../front-end/sing_in.php');
  }
?>
