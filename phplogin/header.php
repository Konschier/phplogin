<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Test PHP Login sistem</title>
</head>

<body class="d-flex flex-column h-100">
  <header>
    <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">My page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Portifolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About me</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
      <?php
       if (isset($_SESSION['userId'])) {
        echo '<form action="includes/logout.inc.php" method="post">
        <button class="btn btn-light my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
      </form>';
    }
    else {
      echo '<form class="form-inline mt-2 mt-md-0" action="includes/login.inc.php" method="post">
      <input class="form-control mr-sm2" type="text" name="mailuid" placeholder="Username/E-mail...">
      <input class="form-control mr-sm2" type="password" name="pwd" placeholder="Password...">
      <button class="btn btn-outline-sucess my-2 my-sm-0" type="submit" name="login-submit">Login</button>
    </form>
    <a class="navbar-nav nav-link" href="signup.php">Signup</a>';
    }
      ?>


    </nav>
  </header>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</body>

</html>