<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Login to enjoy </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="style/master.css">
</head>

<style>
  #php{
    display:none;
  }
</style>

<body class="front_page_body">
  <div id="php">
  <?php
    session_start();
    if(isset($_SESSION["username"])){
      header("Location:front-end/home.php");
    }
  ?>
  </div>
  <div class="container-fluid">
    <header style="font-family:Lobster;">
      <h1>Login To ikkebukuro</h1>
    </header>
    <form class="form" action="back-end/data.php" method="post">
      <div class="row">
        <div class="col-xs-2">
          <input class="form-control" type="text" name="username" value="" placeholder="username"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <input class="form-control" type="password" name="password" value="" placeholder="password"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <button class="btn btn-submit btn-primary" type="submit">Submit</button>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <strong><br><a href="front-end/sing_in.php">sign up here</a></strong>
        </div>
      </div>
    </form>
  </div>
</body>

</html>