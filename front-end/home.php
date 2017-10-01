<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../style/master.css" rel="stylesheet">
</head>

<body class="home_page_body">
    <?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:../index.php");
    }
        echo "kamu sudah login ".$_SESSION["username"]."<br>";
    ?>
     <a href="../back-end/logout.php">logout</a>
</body>

</html>