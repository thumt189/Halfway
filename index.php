<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta charset="UTF-8">
	<title> MinhPhong306 - Make things simple</title>
	<!-- CDN -->
	<!-- Google jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Font awesome-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="app/module/app.js" type="text/javascript"></script>
        <script src="app/controller/CountdownController.js" type="text/javascript"></script>
	<style>
		.countdown-number{
			font-size: 50px;
		}
	</style>

</head>
<body ng-controller="countdownCtrl">
	<div class="container">
		<h3 class="text-center"> minhphong306.com - Make Things Simple </h3>
		<center>
			<div class="row">
				<button class="btn btn-primary btn-lg">
					<p class="countdown-number">{{day}}</p>
					<p>Ngày</p>
				</button>
				<button class="btn btn-success btn-lg">
					<p class="countdown-number">{{hour}}</p>
					<p>Giờ</p>
				</button>
				<button class="btn btn-warning btn-lg">
					<p class="countdown-number">{{minute}}</p>
					<p>Phút</p>
				</button>
				<button class="btn btn-danger btn-lg">
					<p class="countdown-number">{{second}}</p>
					<p>Giây</p>
				</button>
				
			</div>
			
			
		</center>
	</div>
</body>
</html>