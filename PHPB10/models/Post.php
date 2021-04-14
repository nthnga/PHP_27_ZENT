<?php
	require_once('Connection.php');

	class Post{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM posts";

			$result = $this->connection->query($sql);

			$posts = array();

			while ($row = $result->fetch_assoc()) {
				$posts[] = $row;
			}

			return $posts;
		}
	}

	// $post = new Post();

	// $posts = $post->all();

	// echo "<pre>";
	// 	print_r($posts);
	// echo "</pre>";
?>