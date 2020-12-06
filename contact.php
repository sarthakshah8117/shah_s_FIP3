<?php include('./includes/validation.php'); ?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SARTHAK | PORTFOLIO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
	<link rel="shortcut icon" type="image/jpg" href="images/logo_portfolio.jpg">
	
	<link rel="stylesheet" href="css/master.css">


</head>
<body>
	
	<header>
		<div class="logo">
			<img src="images/logo_portfolio.jpg" alt="logo">
		</div>
		<button class="nav-toggle" aria-label="toogle navigation">
			<span class="hamburger"></span>
		</button>

		<nav class="nav">
			<ul class="nav__list">
				<li class="nav__item"><a href="index.html" class="nav_link">Home</a></li>
				<li class="nav__item"><a href="About.html" class="nav_link">About me</a></li>
				<li class="nav__item"><a href="portfolio.html" class="nav_link">Portfolio</a></li>
				<li class="nav__item"><a href="#" class="nav_link">Conatct me</a></li>
			</ul>
		</nav>
	</header>

	<!-- Form -->
	<div class="contactContainer">
		<h1>Lets Get In Touch</h1>
		<p>Fill up the information below</p>

			
				
			<form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
				<input type="text" name="name" value="<?= $name ?>" placeholder="Enter Your Name"><br> 
				<span style='color:red'><?= $name_error ?></span>

				<input type="email" name="email" value="<?= $email ?>" placeholder="Enter Your Email"><br> 
				<span style='color:red'><?= $email_error ?></span>

				<input type="text" name="subject" value="<?= $subject ?>" placeholder="Subject"><br> 
				<span style='color:red'><?= $subject_error ?></span>

				<textarea row="10" cols="25" name="message" value="<?= $message ?>" placeholder="Your Message"></textarea>
				<span style='color:red'><?= $message_error ?> </span>

				<button class="but" type="submit"> SUBMIT</button>
				<span style='color:green;'> <?= $success ?></span>
			</form>
	</div>       
     
	

		
		
		
	<!-- footer -->
	<footer class="footer">
		<ul class="sociallist">
			<li class="sociallist__item">
				<a class="sociallist__link" href="https://github.com/sarthakshah8117">
				<i class="fab fa-github"></i>
				</a>
			</li>

			<li class="sociallist__item">
				<a class="sociallist__link" href="https://www.facebook.com/">
				<i class="fab fa-facebook"></i>
				</a>
			</li>

			<li class="sociallist__item">
				<a class="sociallist__link" href="https://twitter.com">
				<i class="fab fa-twitter"></i>
				</a>
			</li>

			<li class="sociallist__item">
				<a class="sociallist__link" href="https://ca.linkedin.com/">
				<i class="fab fa-linkedin"></i>
				</a>
			</li>	
		</ul>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script defer type ="module" src="js/main.js"></script>
</body>
</html> 