<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hotels</title>
</head>
<style>
	
	#header {
		display: flex;
		justify-content: space-around;
		
	}
	#content{
		width:100%;
		display: flex;

	}
	#main{
		padding: 15px;
		width: 65%;
		background-color:lightsteelblue;
	}
	#left {
		width: 15%;
		background-color:lightblue;
	}
	#right_main{
		text-align: center;
		text-decoration: underline;
		font-size: medium;
		width: 20%;
		background-color:linen;
	}
	#interest_photo img{
		vertical-align: middle;
		padding: 10px;
		display:grid;
		width:200px;

	}
	
	</style>
<body>
	<div id="header">
		<?php include('include/header.php'); ?>
	</div>
	<div id="content">
		<div id="left">

		</div>
		<div id="main">
			<h2>Hotel</h2>
			<?php 
			include ('include/allquery_hotel.php');
			?>
			<hr>
			
			
		</div>
		<div id="right_main">
			
		</div>
		
	</div>
	<div id="footer" style="height:80px;">
		<?php include('include/footer.php');?>
	</div>	
</body>
</html>