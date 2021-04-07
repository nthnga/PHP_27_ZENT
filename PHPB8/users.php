<?php
	class Users{
		var $name;
		var $email;
		var $password;
		var $avatar;

		function inTTUsers(){
			echo "<b>===Đây là thông tin người dùng.===</b>";

			echo "<br> <u>Tên người dùng</u>: ".$this->name;
			echo "<br> <u>Email</u>: ".$this->email;
			echo "<br> <u>Mật khẩu</u>: ".$this->password;
			echo "<br> <u>Ảnh đại diện</u>: ".$this->avatar;
		}

	}

		$users = new Users();

		$users->name = 'Nguyễn Thị Hằng Nga';
		$users->email = 'nthnga0703@gmail.com';
		$users->password = '1234567890';
		$users->avatar = 'https://genk.mediacdn.vn/2016/best-photos-2016-natgeo-national-geographic-7-5846f70467192-880-1481173142742.jpg';

		// echo "<br> <u>Tên người dùng</u>: ".$users->name;
		// echo "<br> <u>Email</u>: ".$users->email;
		// echo "<br> <u>Mật khẩu</u>: ".$users->password;
		// echo "<br> <u>Ảnh đại diện</u>: ".$users->avatar;

		echo "<br>";
		$users->inTTUsers();

?>