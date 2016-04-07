<html lang="en" xml:lang="en">

<head>
    <title>Dan and Sravanthi's Twitter Clone Adventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS style sheet -->
    <link rel="stylesheet" href="styles/resetlogin.css">
    <link rel="stylesheet" href="styles/login.css">
    <!-- CSS style sheet -->
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="images/leaf_960_720.png">
    <!-- Fav Icon -->

</head>

<body>
  <div class="container">

      <h2>Enter Username and Password</h2>
      <div class="container_form">

         <form class="form-signin" role="form"
            action="/index.php" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control"
               name="username" placeholder="username=impossible"
               required autofocus></br>
            <input type="password" class="form-control"
               name="password" placeholder="password=octopus" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit"
               name="login">Login</button>
         </form>

      </div>

    </div>
  </body>

</html>
