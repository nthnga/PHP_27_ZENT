<?php


	require_once('models/User.php');

	class UserController{
		var $model;

		function __construct(){
			$this->model = new User();
			
		}

		function list(){

			$user = $this->model->all();

			require_once('views/user/list.php');

		}

		function add(){
			
			require_once('views/user/add.php');
		}

		function add_process(){
			echo "<br> Process form thêm mới User";
		}

		function edit(){
			echo "<br> Sửa user";
		}
	}
?>