<?php

	if(!isset($_SESSION['tid'])) {
		$_SESSION['error'] = "You must log in";
		echo "<script> 
					window.location.replace('".$base_url."/index.php')
			  </script>";
	}