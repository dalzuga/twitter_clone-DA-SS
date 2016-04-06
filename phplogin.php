<html lang="en" xml:lang="en">

<head>
    <title>Dan and Sravanthi's Twitter Clone Adventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS style sheet -->
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mediaqueryhigh.css">
    <link rel="stylesheet" href="styles/mediaquerymid.css">
    <link rel="stylesheet" href="styles/mediaquerylow.css">
    <!-- CSS style sheet -->
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="images/leaf_960_720.png">
    <!-- Fav Icon -->
    <script src="scripts/enablejs.js"></script>
    <script src="scripts/post_a_status.js"></script>
    <script src="scripts/reply.js"></script>
    <script src="scripts/toggle.js"></script>
    <script src="scripts/behaviour.js"></script>
    <script src="scripts/sticky_smart_header.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/load_more.js"></script>
    <script src="scripts/weather.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>

</head>

<body>
  <div class="container">

      <h2>Enter Username and Password</h2>
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'tutorialspoint' &&
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';

                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username = impossible"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = octopus" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>

      </div>
    </div>
  </body>

</html>
