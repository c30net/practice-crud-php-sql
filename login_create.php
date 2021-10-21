<?php

include_once 'db.php';
include_once 'functions.php';
	create();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<h1 class="text-center"> Create </h1>

<div class="container">
	<div class="col-sm-6">

		<form action="" method='post'>
			<div class="form-group">
				<label for='username'>Username</label>
				<input type="text" name="username" class='form-control'>
			</div>

			<div class="form-group">
				<label for='password'>Password</label>
				<input type="password" name="password" class='form-control'>
			</div>

			<input type='submit' class='btn btn-primary' name='submit' value='CREATE'></input>
		</form>

	</div>
</div>
</body>
</html>
