<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../bootstrap/assets/ico/favicon.ico">

    <title>Askhaya Patra Food Predictor</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.1/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>    

	<?php
	$l_id = $_GET['locationid'];
	include_once(dirname(__FILE__) .DIRECTORY_SEPARATOR . 'functions/locationfunctions.php');
	include_once(dirname(__FILE__) .DIRECTORY_SEPARATOR . 'functions/consumptionfunctions.php');
	$LocationInfo = LocationInfo($l_id);
	?>
	<br>
	<br>
	<br>
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12">
				<h1><?=$LocationInfo['Range'] ?></h1>
				<p>Latitude: <?=$LocationInfo['loc']['coordinates'][1] ?></p>
				<p>Longitude: <?=$LocationInfo['loc']['coordinates'][0] ?></p>
				<p>Prediction for tomorrow: 300 servings</p>
			</div>
		</div>
	</div>

	<table class = "table">
	
	<?
	$ReqData = SchoolConsDateRange($l_id);
	foreach($ReqData as $data){
		?><tr><td><?=$data['Indentqty']?></td></tr><?
	}
	?> 

	</table>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/assets/js/docs.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>