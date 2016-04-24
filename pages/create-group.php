<?php
if (isset($_POST['name']))
{
	require "connect.php";
	
	$query = "INSERT INTO groups(name) VALUES('" . $_POST['name'] . "');";
	$conn->query($query);
	$id = $conn->insert_id;
		
	header("Location: group.php?id=$id");
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>default.html</title>
<style>
.formpanel{
	padding:0;
}
body{
background-color:black;        
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
		<div class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone"></span> ChatRoom</div>
	</div>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="SignUp.php"><span class="glyphicon glyphicon-list-alt"></span> Sign Up </a></li>
        <li><a href="default.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
	</ul>
</div>
</nav>
<br><br><br><br><br><br>
<div class="row">
<div class="col-sm-4 col-xs-1"></div>
<div class="col-sm-4 col-xs-10 formpanel panel panel-default" style="background-color:white">
<div class="panel-heading">Create New Group</div><div class="panel-body">
	<form action="create-group.php" method="post">
	<div class="form-group">
	<label for="name">Enter Group Name</label>
	<input class="form-control" id="name" type="text" name="name">
	</div>
	<div class="form-group">
	<button class="form-control btn-primary" id="login" type="submit">Create</button>
	</div>
	</form>
</div>
</div>
</div>
</body>
</html>