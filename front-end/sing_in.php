<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Sign Up here</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="../style/master.css">
</head>


<body class="front_page_body">
  <div class="container-fluid">
    <header style="font-family:Lobster;font-size">
      <h1>Sign Up to Ikkebukuro</h1>
    </header>
    <form class="" action="../back-end/datasign.php" method="post">
      <div class="row">
        <div class="col-xs-3">
          <input class="form-control" type="text" name="name" value="" placeholder="username"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <input class="form-control" type="password" name="pass1" value="" placeholder="password"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <input class="form-control" type="password" name="conpass" value="" placeholder="confirm password"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <button class="btn btn-primary" type="submit">submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>