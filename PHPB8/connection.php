<?php

	class Connection{
		var $conn;

		function __construct(){

			//Các thông số kết nối
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";
			$dbname = "mysql_php_27_zent";

			//Tạo CSDL
			$this->conn = new sqli($servername,$username,$password,$dbname);

			$this->conn->set_charset("utf8");

			//check kết nối
			if($this->conn->connect_error){
				die("Connect failed: ".$this->conn->connect_error);
			}
		}
	}
?>