		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php" class="smoothScroll">HOME</a></li>
						<li><a href="index.php" class="smoothScroll">SERVICE</a></li>
						<li><a href="index.php" class="smoothScroll">ABOUT</a></li>
						<li><a href="index.php" class="smoothScroll">TEAM</a></li>
						<li><a href="contact.php" class="smoothScroll">CONTACT</a></li>
						<?php if (isset($_SESSION["user_id"])): ?>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						<?php else: ?>
						<li class="nav-item">
							<a class="nav-link" href="register.php">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>



	  <?php endif; ?>
					</ul>
				</div>
			</div>
		</div>