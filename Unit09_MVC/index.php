<?php 
	$mod = ''; // module: category, post, user
	$act = ''; // action: list, add, edit

	$mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'error');

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller = new CategoryController();
			
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'addProcess':
					$data = $_POST;
					$controller->addProcess($data);
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'detail':
					$controller->detail();
					break;
				
				case 'destroy':
					$id = $_GET['id'];
					$controller->destroy($id);
					break;
				
				default:
					# code...
					break;
			}
			break;

			
		case 'post':
			require_once('controllers/PostController.php');
			$controller = new PostController();
			
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'detail':
					$controller->detail();
					break;
				
				default:
					# code...
					break;
			}
			break;


		case 'user':
			require_once('controllers/UserController.php');
			$controller = new UserController();
			
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;

				case 'detail':
					$controller->detail();
					break;
				
				default:
					# code...
					break;
			}
			break;
		
		default:
			// echo "Home";
			break;
	}

	// if($mod == 'category'){
	// 	echo "Bạn đang muốn dùng chức năng liên quan đến category";
	// }elseif ($mod == 'post') {
	// 	echo "Bạn đang muốn dùng chức năng liên quan đến post";
	// }elseif ($mod == 'user') {
	// 	echo "<br>Bạn đang muốn dùng chức năng liên quan đến user";
	// }else{
	// 	echo "Home";
	// }

 ?>