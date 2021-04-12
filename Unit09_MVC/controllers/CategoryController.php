<?php

	// echo "Đây là Controller";
	require_once('models/Category.php');

	class CategoryController{
		var $model;

		function __construct(){
			$this->model = new Category();
			// echo "<br>Category Controller";
		}

		function list(){

			$categories = $this->model->all();

			require_once('views/category/list.php');

		}

		public function add(){ //lafnphaafn creat trong laravel
			
			require_once('views/category/add.php');
		}

		public function addProcess($data){ //hàm store xử lý
			// echo 'Đây là hàm xử lý';
			
			$success = $this->model->add($data);
			if ($success) {
				setcookie('success','Them moi thanh cong', time()+10);
			}else{
				setcookie('error','Them moi that bai', time()+10);
			}

			header("Location: index.php?mod=category&act=list");
		}

		function edit(){
			echo "<br> Sửa category";
		}

		function detail(){
			$model=new Category();
			$id=$_GET['id'];
			$category =$model->find($id);

			require_once('views/category/detail.php');
		}

		public function destroy($id){

			$success = $this->model->destroy($id);
			
			if ($success) {
				setcookie('success','Xoa thanh cong', time()+10);
			}else{
				setcookie('error','Them moi that bai', time()+10);
			}

			header("Location: index.php?mod=category&act=list");
		}
	}
?>