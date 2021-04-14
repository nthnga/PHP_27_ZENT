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

		public function creat(){
			
			require_once('views/user/creat.php');
		}

		public function store(){
			//Hàm xử lý
			//
			$data = $_POST;

			$success = $this->model->creat($data);

		// 	if($success ==1 ){
		// 	echo "<br>thêm thành công";
		// }else{
		// 	echo "<br>Thêm thất bại";
		// }
			if ($success) {
				setcookie('success','Thêm mới thành công.', time()+10);
			}else{
				setcookie('error','Thêm mới thất bại.', time()+10);
			}

			header("Location: index.php?mod=user&act=list");
		}

		public function edit(){

			$id = $_GET['id'];

			$users = $this->model->find($id);

			require_once('views/user/edit.php');
		}


		public function update(){

			$data  = $_POST;

			$status = $this->model->update($data);

		// 	if($status ==1 ){
		// 	echo "<br>thêm thành công";
		// }else{
		// 	echo "<br>Thêm thất bại";
		// }
			
			if ($status) {
				setcookie('success','Cập nhật thành công', time()+10);
			}else{
				setcookie('error','Cập nhật thất bại', time()+10);
			}

			header("Location: index.php?mod=user&act=list");
		}

		public function destroy(){

			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			
			if ($success) {
				setcookie('success','Xóa thành công', time()+10);
			}else{
				setcookie('error','Xóa thất bại', time()+10);
			}

			header("Location: index.php?mod=user&act=list");
		}

		function detail(){
			$id=$_GET['id'];

			$user = $this->model->find($id);

			require_once('views/user/detail.php');
		}
	}
?>