<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Join Us</title>
		
		<!-- For Top navigation and footer classes -->
		<link rel = "stylesheet" type = "text/css"
			href = "styles.css">
			
		<!-- For social media icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			.box{
				padding-top: 85px;
				height: 1000px;
				background-color:#e67300;
			}
			.head{
				font-family: tahoma, helvetica, sans-serif;
				 font-weight: 600;
				font-size: 72px;
				color: white;
				text-align: center;
			}
			.small-head{
				font-family:  helvetica, sans-serif;
				letter-spacing:2px;
				font-weight: 400;
				font-size: 20px;
				color: #ddd;
				line-height: 1.5;
				text-align: center;
			}
			.container { 
				height: 100px;
				position: relative;
			}
			.center {
				margin: 0;
				position: absolute;
				top: 35%;
				left: 50%;
				-ms-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
			}
			.button {
				background-color: #e67300; 
				color: white;
				padding: 12px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 22px;
				cursor: pointer;
				border: 2px solid #FFFFFF;
			}
			.button:hover {
				background-color: #FFFFFF;
				color: black;
			}
		</style>
	</head>
	<body style="margin:0;">
		
		<!-- top navigation -->
		<div class="topnav">
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
			<a href="home.html">Home</a>
			<img class ="logo" 
			src = "https://api.freelogodesign.org/files/3462d7d49d3b43b79e3e1e6115a5e927/thumb/logo_200x200.png?v=637517085130000000" 
			alt = "Not found">
		</div>
		<div class = "box">
			<h1 class = "head">Thank You!</h1>
			<h4 class = "small-head">We would consider your application form</h4>
			<br>
			<div class="container">
				<div class="center">
					<a href = "student.php" class="button">LIST OF STUDENTS</a>
				</div>
			</div>
		</div>
			<?php
				$servername = "sql300.byethost9.com";
				$username = "b9_28401979";
				$password = "Bassam2605";
				$dbname = "b9_28401979_riyadh_uni";
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$name = $_POST['name'];
				$dateOfBirth = $_POST['birthday'];
				$lastDegree = $_POST['degree'];
				$homeTown = $_POST['hometown'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
			
				$sql = "INSERT INTO student (NAME, DATE_OF_BIRTH, LAST_DEGREE, HOME_TOWN, MOBILE, EMAIL)
				VALUES ('".$name."', '".$dateOfBirth."', '".$lastDegree."', '".$homeTown."', '".$phone."', '".$email."')";
				
				if ($conn->query($sql) === false) 
					echo "Error: " . $sql . "<br>" . $conn->error;

				$conn->close();
			?>
		</div>
		
		<!-- footer -->
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