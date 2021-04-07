<?php
	class Posts{
		var $title;
		var $thumbnail;
		var $description;
		var $content;

		function inTTPosts(){
			echo("<br> <b>===Đây là thông tin bài viết.===</b>");

			echo "<br> <u>Tiêu đề bài viết</u>: ".$this->title;
			echo "<br> <u>Đường dẫn ảnh</u>: ".$this->thumbnail;
			echo "<br> <u>Mô tả nội dung</u>: ".$this->description;
			echo "<br> <u>Nội dung bài viết</u>: ".$this->content;
		}
	}

		$post = new Posts();

		$post->title = 'Tin quốc tế';
		$post->thumbnail = 'https://st.quantrimang.com/photos/image/2020/10/08/Hinh-Nen-iPhone-X-82.jpg';
		$post->description = 'Ngày 3/8, một ngày sau khi Mỹ chấm dứt Hiệp ước kiểm soát tên lửa tầm trung và tầm ngắn (INF), Bộ trưởng Quốc phòng Mark Esper tuyên bố ủng hộ việc Mỹ sớm triển khai hệ thống tên lửa tầm trung mới ở châu Á';
		$post->content = 'Reuters đưa tin, người đứng đầu Lầu Năm Góc Mark Esper ngày 3/8 tuyên bố ủng hộ việc Mỹ sớm bố trí các tên lửa tầm trung phóng từ mặt đất tại châu Á, một ngày sau khi Mỹ rút khỏi hiệp ước kiểm soát vũ khí quan trọng ký với Nga từ thời Chiến tranh Lạnh.';

		// echo "<br> <u>Tiêu đề bài viết</u>: ".$post->title;
		// echo "<br> <u>Đường dẫn ảnh</u>: ".$post->thumbnail;
		// echo "<br> <u>Mô tả nội dung</u>: ".$post->description;
		// echo "<br> <u>Nội dung bài viết</u>: ".$post->content;

		echo "<br>";
		$post->inTTPosts();

?>