<?php
	
		
		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');


		if($connection)
		{
			echo 'We are connected';
		}
		else
		{
			die('Database connection failed');
		}	

		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			die('Query Failed'. mysqli_error($connection));
		}
	

 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="col-sm-6">
		<?php

		while($row = mysqli_fetch_assoc($result))
		{
			?>
			<pre>
				<?php
			print_r($row);
			?>
			</pre>
			<?php
		}
		?>

	</div>
</div>




</body>
</html>