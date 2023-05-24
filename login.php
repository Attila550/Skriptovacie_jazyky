<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/Database.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $users = $result->fetch_assoc();
    
    if ($users) {
        
        if (password_verify($_POST["password"], $users["password_hash"])) {
        
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $users["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- magnific pop up -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">

    <title>Login</title>

  </head>

  <body>
  <?php include 'partials/nav.php'; ?>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Zle prihlasovacie udaje</em>
    <?php endif; ?>
    
    <form class="login" method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
               
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>


    <?php include 'partials/footer.php'; ?>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- Magnific Pop up -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
  </body>

</html>