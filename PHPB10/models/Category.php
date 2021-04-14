<?php
	require_once('Connection.php');

	class Category{
		var $connection;

		function __construct(){
			$connection_obj = new Connection();
			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT * FROM categories";

			$result = $this->connection->query($sql);

			$categories = array();

			while ($row = $result->fetch_assoc()) {
				$categories[] = $row;
			}

			return $categories;
		}

		function find($id){
			$sql = "SELECT * FROM categories WHERE id=".$id;

			return $this->connection->query($sql)->fetch_assoc();
		}

		public function add($data){
			$query = 'INSERT INTO categories(name, description) VALUES ("'.$data['name'].'", "'.$data['description'].'")';
			
			return $this->connection->query($query);
		}

		public function destroy($id){
			$query = "DELETE FROM `categories` WHERE `categories`.`id` = ".$id;
			echo "$query";
			return $this->connection->query($query);
		}

		public function update($data){
			$sql = "UPDATE categories SET name = '".$data['name']."', description='".$data['description']."' WHERE id = '".$data['id']."'";
	
			return $this->connection->query($sql);
			
		}
	}

	// $category = new Category();

	// $categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
?>