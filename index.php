<?php
session_start(); 
?>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="styleSheet.css">
		<script src="jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<title> Trail Head Check In </title>
		<link rel="icon" 
      	type="image" 
      	href="https://trailheadboise.org/wp-content/uploads/2017/11/Trailhead-Logo-2x.png">
		  <style>
      .fancy {
        font-family: 'Lobster';
		font-size: 36px;
		color:white;
		margin-bottom: 48px;
		text-decoration:underline;
      		}
    </style>
	</head>
	<body>
		<div class="TopBoxes">
				<table style="width:100%">
						<tr>
						<th>Basketball</th>
						<th>Baseball</th>
						<th>Football</th>
						<th>Soccer</th>
						<tr>
							<td><img src="basketlive.gif"></td>
							<td><img src="baselive.gif"></td>
							<td><img src="footlive.gif"></td>
							<td><img src="soccerlive.gif"></td>
				</table>						
				</div>
				<script>
				$onload
				</script>
		<div class="left">
				<table style="width:100%">
						<tr>
						<td><a href="newslink.php">
							<img src="basegame1.gif" alt="Basketball"></a></td>
						</tr><tr>
						<td><a href="newslink.php">
							<img src="basegame2.gif" alt="Basketball"></a></td>
						</tr><tr>	
							<td><a href="newslink.php">
							<img src="basegame3.gif" alt="Basketball"></a></td>
							</tr><tr>
							<td><a href="newslink.php">
							<img src="basegame4.gif" alt="Basketball"></a></td>
							</tr>
					</table>
		</div>
		<div class="middle">
			<div><img src="logo.png" alt="SportEmpire Logo">
			<p class="fancy">SportEmpire Welcomes You!</p>
			<ul>
				<li><a href="login.php">Member Login</a></li>
				<li><a href="register.php">New to SportEmpire?</a></li>
				<li><a href="newslink.ph">Sports News</a></li>
			</ul>
			</div>
			<ul>
					<hr>
					<h2>News article about tacos</h2>
					<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias eos unde placeat blanditiis inventore? Dicta quisquam in necessitatibus rem exercitationem officiis culpa sapiente! Provident corporis debitis aspernatur facilis voluptatibus.</li>
					<hr>
					<h2>News article about pizza</h2>
					<li>Accusamus, earum atque? Quisquam perspiciatis doloremque molestiae officiis quod ipsa voluptatem ad. Aut, consectetur doloremque voluptatibus quas necessitatibus quos sapiente quia architecto. Temporibus amet odit adipisci quod doloremque? Magni, maiores.</li>
					<hr>
					<h2>News article about Icecream</h2>
					<li>Beatae doloremque illum, aspernatur quisquam exercitationem aperiam officia ullam? Beatae, hic autem vel natus soluta neque mollitia ipsa voluptate maxime corrupti, repudiandae sunt aliquid ab nihil similique doloribus commodi? Sint.</li>
					<hr>
				</ul>
		</div>
		<div class="righty">
			<h1>Current Trending News</h1>
		<ul>
			<hr>
			<h2>Basketball Upsets for the Ages.</h2>
			<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias eos unde placeat blanditiis inventore? Dicta quisquam in necessitatibus rem exercitationem officiis culpa sapiente! Provident corporis debitis aspernatur facilis voluptatibus.</li>
			<hr>
			<h2>Football game goes into triple overtime.</h2>
			<li>Accusamus, earum atque? Quisquam perspiciatis doloremque molestiae officiis quod ipsa voluptatem ad. Aut, consectetur doloremque voluptatibus quas necessitatibus quos sapiente quia architecto. Temporibus amet odit adipisci quod doloremque? Magni, maiores.</li>
			<hr>
			<h2>Soccer game cancled due to extreme weather.</h2>
			<li>Beatae doloremque illum, aspernatur quisquam exercitationem aperiam officia ullam? Beatae, hic autem vel natus soluta neque mollitia ipsa voluptate maxime corrupti, repudiandae sunt aliquid ab nihil similique doloribus commodi? Sint.</li>
			<hr>
			<h2>Baseball game ends with no hitter.</h2>
			<li>Sed sunt dolore corporis, maiores praesentium, voluptatibus tempore facilis nemo atque architecto quo quidem dicta fugiat dolorem perspiciatis vel adipisci aliquid natus? Accusantium eligendi vel sint amet praesentium asperiores harum?</li>
			<hr>	
		</ul>
		</div>
		<div class="footer">
		<a href="login.php">  Login  </a>
		<a href="forum.php">  Forum  </a>
		<a href="index.php">  Main  </a>
		<a href="newslink.php">  News  </a>
		<a href="register.php">  Register &nbsp </a>
   		<div class="copyright">
	  		<?php if(isset($_SESSION['logged'])){
			 echo "Logged in as: ";
       echo $_SESSION['logged'];
       echo '&nbsp';
       echo '<a href="logout.php">Logout</a>';
  			 }else{
    		 echo "<a href='login.php'> Not Logged In </a>";
   			}
   			?>
  		 	<p>Copyright © 2018 SportsEmpire</p>
		</div>
	</div>
	</body>
</html>


