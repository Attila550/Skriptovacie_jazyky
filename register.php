<?php require_once 'partials/nav.php'; ?>
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

  </head>

  <body>
  <?php include 'partials/nav.php'; ?>
    
    <h1>Signup</h1>
    
    <form action="register_completition.php" method="post" id="signup" novalidate>
        <div>
            <label for="username">Name</label>
            <input type="text" id="username" name="username">
        </div>
        
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button>Sign up</button>
    </form>
	<?php include 'partials/footer.php'; ?>
  </body>

</html>