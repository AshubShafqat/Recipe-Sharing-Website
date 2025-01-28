<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>success signup </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="featured.php">Featured Recipes</a>
					</li>
					
					<li >
						<a href="about.php">About</a>
					</li>
				
					
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<div>
							<center><h4>Successfully Registered!</h4></center>
							<p>
								<center>Now you are the part of cooking website <a href="login.php">click here</a> to login.</center>
							</p>

							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div>
				<h3>Cooking Video</h3>
				<a href="videos.php"><img src="images/cooking-video.png" alt="Image"></a>
				<span>Vegetable &amp; Rice Topping</span>
			</div>
			<div>
				<h3>Featured Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.php"><img src="images/sandwich.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Ham Sandwich</a></h2>
							<span>by: Amina</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/biscuit-and-coffee.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Biscuit &amp; Sandwich</a></h2>
							<span>by: Sarah</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/pizza.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Delicious Pizza</a></h2>
							<span>by: Ayesha</span>
						</div>
					</li>
				</ul>
			</div>
			
			<div>
				<h3>Get Updates</h3>
				<a href="http://www.facebook.com/" target="_blank" id="facebook">Facebook</a>
				<a href="http://www.twitter.com/" target="_blank" id="twitter">Twitter</a>
				<a href="http://www.youtube.com/" target="_blank" id="youtube">Youtube</a>
				<a href="http://www.google.com/" target="_blank" id="googleplus">Google&#43;</a>
			</div>
			<div style="display:<?php echo $none;?>;">
				<h3>Settings</h3>
				<a href="#"  ><?php echo $logout;?></a>
				
				 
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy;Copyright 2025. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>