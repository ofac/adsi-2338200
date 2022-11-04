<?php 

	if($_POST) {
		$img = $_POST['img'];
		switch ($img) {
			case '1':
				echo "images/naruto.jpg";
				break;
			case '2':
				echo "images/gara.jpg";
				break;	
			case '3':
				echo "images/sasuke.jpg";
				break;	
			default:
				echo "images/noimg.jpg";
				break;
		}
	}

?>