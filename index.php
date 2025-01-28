<?php
include('connection/connect.php');

 session_start(); //session started by unique user_id
  
error_reporting(0);                             //for printing the  text
  $sql = "SELECT * FROM signup where user_id='".$_SESSION["user_id"]."'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $name=$row['firstname'];

  if($_SESSION["user_id"]==0)
  {
	  $none='none';
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Recipe Sharing Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</style>
</head>
<body>
	
	<div class="header">
		<div>
		<marquee behavior="" direction="left">ASHUB SHAFQAT-----------STUDENT OF BS(SE)-5TH-B-------------- 2022-AG-8058</marquee>
			<a href="index.php"><img src="images/logo.png" height=70px alt="Logo"></a>
		</div>
	
		
	</div>
	<div  style="background-color:;margin:auto;min-height:20px;display:<?php echo $none;?>;">
	<div  style="background-color:;margin-left:200px;width:950px;min-height:30px;">
	<p style='float:left;color:#449c3a;margin-left:10px;font-size:20px;'>You successfully login!</p>
		<p style='float:right;color:#fff;margin-left:px;font-size:20px;'>Welcome:<span style='margin-right:0px;display:inline-block;margin-right:5px;'><?php echo $name ?></span>
			<image src='images/user.png'  style='display:inline-block;height:20px;width:20px;margin-top:5px;margin-right:5px;'/>
	</div>	
	</div>
	<div class="body">
	
		<div>
			<div class="header">
				<ul>
					<li class="current">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
							<a href="featured.php">Recipe of Month</a>
					</li>
					
					<li>
						<a href="about.php">About</a>
					</li>
						<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li><a href="login.php">login</a></li>';
								echo '<li><a href="signup.php">signup</a></li>';
							}
						else
							{	
									$logout= '<form action="login.php" method="post" >
									<input type="submit" id="logout" name="logout" value="logout" style="width:100px;color:#000;border:none;padding:5px;font-size:15px;"  ></form>';
							}

						?>
					
				</ul>
			</div>
			<div class="body">
				<div>
					<a href="index.php"><img src="images/turkey.jpg" alt="Image"></a>
				</div>
				<ul>
					<li class="current">
						<a href="blog.php"><img src="images/holi-turkey.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Holy Turkey</a></h2>
							<p>
								Tuck wings under turkey
								
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/fruits-and-bread.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Fruits &amp; Bread</a></h2>
							<p>
								Fresh Fruit Bread Recipe
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/dessert.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Dessert</a></h2>
							<p>
								5 Quick-and-Easy Dessert Recipes
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="footer">
				<ul>
				<li>
						<h2><a href="recipes.php"> Recipes</a></h2>
						<a href="recipes.php"><img src="images/a-z.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="featured.php">Featured Recipes</a></h2>
						<a href="featured.php"><img src="images/featured.jpg" alt="Image"></a>
					</li>
					
				</ul>
				<ul>
					<li>
						<h2><a href="videos.php">Videos</a></h2>
						<a href="videos.php"><img src="images/videos.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="blog.php">Blog</a></h2>
						<a href="blog.php"><img src="images/blog.jpg" alt="Image"></a>
					</li>
				</ul>
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
				<a href="https://www.facebook.com/" target="_blank" id="facebook">Facebook</a>
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