<!DOCTYPE html>
<html>
	<head>
		<style>
			body {
				margin: 0;
			}
			.topnav {
				overflow: hidden;
				background-color: #333;
			}
			.topnav a {
				float: left;
				display: block;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration; none;
				font-size: 17px;
			}
			.topnav a:hover {
				background-color: #ddd;
				color: black;
			}

			.topnav a.active {
				background-color: #4CAF50;
				color: white;
			}

			.topnav .icon {
				display: none;
			}

			@media screen and (max-width: 600px) {
				.topnav a:not(:first-child) {display: none;}
				.topnav a.icon {
				float: right;
				display: block;
				}
			}

			@media screen and (max-width: 600px) {
			.topnav.responsive {position: relative;}
			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
		</style>
	</head>
	<body>
		<div class="topnav" id="myTopnav">
			<a href="#home" class="active">Home</a>
			<a href="#news">News</a>
			<a href="#contact">Contact</a>
			<a href="#about">About</a>
		</div>
		<ul>
			<li>Person 1: <?php echo "Paul"?></li>
			<li>Person 2: <?php echo "Deniz"?></li>
			<li>Person 3: <?php echo "Bob"?></li>
			<li>Person 4: <?php echo "Holly"?></li>
		</ul>
	</body>
</html>