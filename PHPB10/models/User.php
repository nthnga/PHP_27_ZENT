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

		public function find($id){

			$sql = "SELECT * FROM users WHERE id=".$id;

			$result = $this->connection->query($sql);

			$user = $result->fetch_assoc();

			return $user;
		}

		public function creat($data){

			 $sql = "INSERT INTO users (name, password, email, avatar, created_at) VALUES ('".$data['name']."','".$data['password']."','".$data['email']."','".$data['avatar']."','".$data['created_at']."')";

			return $this->connection->query($sql);
			
		}

		public function update($data){

			$sql = "UPDATE users SET name='".$data['name']."' ,email='".$data['email']."' ,password='".$data['password']."' ,avatar='".$data['avatar']."' ,created_at='".$data['created_at']."' WHERE  id = ".$data['id'];
	
			return $this->connection->query($sql);
		}

		public function destroy($id){
			$sql = "DELETE FROM `users` WHERE `users`.`id` = ".$id;
	
			return $this->connection->query($sql);
		}
	}
?>