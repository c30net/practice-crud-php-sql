<?php

function create(){
    global $connection;
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];



        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die('Query Failed'. mysqli_error($connection));
        }
    }
}


function delete()
{   global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id=$id ";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}




function update()
{   global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET username = '$username', password='$password' WHERE id=$id ";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		die("QUERY FAILED" . mysqli_error($connection));
	}
}
	function showAllData(){
		global $connection;
		$query  = "SELECT * FROM users";
		$result = mysqli_query( $connection, $query );
		if ( ! $result )
		{
			die( 'Query Failed' . mysqli_error( $connection ) );
		}

		while($row = mysqli_fetch_assoc($result))
		{
			$id = $row['id'];
			echo "<option value='$id'>$id</option>";


		}
	}
