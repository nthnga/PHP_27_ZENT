<?php


	require_once('models/Post.php');

	class PostController{
		var $model;

		function __construct(){
			$this->model = new Post();
			
		}

		function list(){

			$post = $this->model->all();

			require_once('views/post/list.php');

		}

		function add(){
			
			require_once('views/post/add.php');
		}

		function add_process(){
			echo "<br> Process form thêm mới Post";
		}

		function edit(){
			echo "<br> Sửa post";
		}
	}
?>