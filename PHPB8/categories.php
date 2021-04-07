<?php
	class Category{
		var $name;
		var $thumbnail;
		var $parent_id;
		var $slug;
		var $description;

		function inTTCategory(){
			echo "<br> <b>===Đây là thông tin danh mục.===</b>";

			echo "<br> <u>Tên danh mục</u>: ".$this->name;
			echo "<br> <u>Đường dẫn ảnh</u>: ".$this->thumbnail;
			echo "<br> <u>Danh mục cha</u>: ".$this->parent_id;
			echo "<br> <u>Thể loại</u>: ".$this->slug;
			echo "<br> <u>Mô tả nội dung danh mục</u>: ".$this->description;
		}
	}

		$categories = new Category();

		$categories->name = 'Công nghệ';
		$categories->thumbnail = 'https://meta.vn/Data/image/2021/01/11/tai-hinh-anh-buon-anh-buon-tam-trang-3.jpg';
		$categories->parent_id = '1';
		$categories->slug = 'cong-nghe';
		$categories->description = 'Chuyên mục công nghệ';

		// echo "<br> <u>Tên danh mục</u>: ".$categories->name.".";
		// echo "<br> <u>Đường dẫn ảnh</u>: ".$categories->thumbnail.".";
		// echo "<br> <u>Danh mục cha</u>: ".$categories->parent_id.".";
		// echo "<br> <u>Thể loại</u>: ".$categories->slug.".";
		// echo "<br> <u>Mô tả nội dung danh mục</u>: ".$categories->description.".";

		echo "<br>";
		$categories->inTTCategory();
?>