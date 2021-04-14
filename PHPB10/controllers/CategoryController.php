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

		public function addProcess(){ //hàm store xử lý
			// echo 'Đây là hàm xử lý';
			$data = $_POST;

			$success = $this->model->add($data);
			
			if ($success) {
				setcookie('success','Thêm mới thành công.', time()+10);
			}else{
				setcookie('error','Thêm mới thất bại.', time()+10);
			}

			header("Location: index.php?mod=category&act=list");
		}

		public function edit(){

			$id = $_GET['id'];

			$category = $this->model->find($id);

			require_once('views/category/edit.php');

		}

		public function update(){

			$data  = $_POST;

			$status = $this->model->update($data);
			
			if ($status) {
				setcookie('success','Cập nhật thành công', time()+10);
			}else{
				setcookie('error','Cập nhật thất bại', time()+10);
			}

			header("Location: index.php?mod=category&act=list");
			
		// 	if($status ==1 ){
		// 	echo "<br>thêm thành công";
		// }else{
		// 	echo "<br>Thêm thất bại";
		// }
		}

		function detail(){
			$id=$_GET['id'];
			$category =$this->model->find($id);

			require_once('views/category/detail.php');
		}

		public function destroy(){

			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			
			if ($success) {
				setcookie('success','Xóa thành công', time()+10);
			}else{
				setcookie('error','Xóa thất bại', time()+10);
			}

			header("Location: index.php?mod=category&act=list");
		}
	}
?>