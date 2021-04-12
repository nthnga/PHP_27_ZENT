<?php
	require_once('Connection.php');

	class User{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM users";

			$result = $this->connection->query($sql);

			$users = array();

			while ($row = $result->fetch_assoc()) {
				$users[] = $row;
			}

			return $users;
		}
	}

	// $user = new Category();

	// $users = $user->all();

	// echo "<pre>";
	// 	print_r($users);
	// echo "</pre>";
?>