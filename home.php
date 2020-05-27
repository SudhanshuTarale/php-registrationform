<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>

<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<a class="float-right" href="logout.php">LOGOUT</a>
		<h1>Welcome <?php echo $_SESSION['username'];?> </h1>
	</div>
	
</body>
</html>