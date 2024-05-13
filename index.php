<!DOCTYPE html>
<html>
<head>
	<title>Include and Require</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}
		h1 {
			font-size: 32px;
			margin-bottom: 10px;
			color: #333;
		}
		p {
			font-size: 18px;
			margin-bottom: 10px;
			color: #666;
		}
		.label {
			font-weight: bold;
		}
		.edu-info {
			margin-top: 20px;
			padding-top: 20px;
			border-top: 1px solid #ddd;
		}
		.edu-degree {
			font-weight: bold;
			font-size: 24px;
			margin-bottom: 5px;
		}
		.edu-school {
			font-style: italic;
			margin-bottom: 5px;
		}
		.edu-year {
			font-size: 14px;
			color: #999;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php include 'personal-info.php'; ?>
	</div>
    <br><br><br>
	<div class="container">
		<?php require 'education.php'; ?>
	</div>
</body>
</html>
