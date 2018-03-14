<?php
	function connectDatabase(){
		$host = "localhost";
		$username = "";
		$password = "";
		$dbname = "";

		$conn = mysqli_connect($host, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			return $conn;
			mysqli_set_charset($conn, "utf8");
		}
	}

	function closeDatabase($conn){
		mysqli_close($conn);
	}
?>
