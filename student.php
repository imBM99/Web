<!DOCTYPE html>
<html >

	<head>
		<meta charset="UTF-8">
		<title>List of Students</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- For Top navigation and footer classes -->
		<link rel="stylesheet" href="styles.css">
	
		<!-- For social media icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body,
			html {
				height: 100%;
				margin: 0;
			}
			.box{
				padding-top: 30px;
				overflow: hidden;
				background-color:#e67300;
			}
			table {
				font-family: tahoma, helvetica, sans-serif;
				width: 80%;
				margin-left: 100px;
				text-align : center;
			    border: 5px inset #0f0f3e
			}
			.head{
				font-family: tahoma, helvetica, sans-serif;
				 font-weight: 600;
				font-size: 72px;
				color: #050515;
				text-align: center;
				text-decoration:underline;
			}
		</style>
	</head>
	<body>
		<!-- Top navigation -->
		<div class="topnav" id="top">
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
			<a href="home.html">Home</a>
			<img class="logo"
				src="https://api.freelogodesign.org/files/3462d7d49d3b43b79e3e1e6115a5e927/thumb/logo_200x200.png?v=637517085130000000"
				alt="Not found">
		</div>

		<div class="box">
			<h1 class = "head">List of students</h1>
			<?php
				include 'select.php';
			?>
		</div>
		
		<!-- Footer -->
		<footer>
				<div class="footer">
					<div class = "incenter">
						<a href="home.html">Home</a>
						<a href="contact.html">Contact</a>
						<a href="about.html">About</a>
					</div>	
					<div class = "inleft">
						<img class ="logo" src = "https://api.freelogodesign.org/files/3462d7d49d3b43b79e3e1e6115a5e927/thumb/logo_200x200.png?v=637517085130000000" 
							alt = "Not found">
					</div>
					<div class = "inright">
						<a href = "#top" class="backtotop-button"><i class="arrow right"></i></a>
					</div>
					<div class = "inbottom-left">
						<p class = "copyright-text">&copy; 2021 / Group 8 / 
							IS203 / IMAM / CCIS &trade;
						</p>
					</div>
					<div class = "inbottom-right">
						<a href="https://twitter.com/IMSIU_edu_sa" class="fa fa-twitter"></a>
						<a href="https://www.linkedin.com/school/al-imam-mohamad-ibn-saud-university/" class="fa fa-linkedin"></a>
						<a href="https://www.snapchat.com/add/imamu.edu" class="fa fa-snapchat-ghost"></a>
					</div>
				</div>
			</footer>
	</body>
</html>