<?php

	session_start();

	if(isset($_POST['submit'])){

		$text = $_POST['captcha'];
		//echo ($text);
		if($text == $_SESSION['code']){
			echo "correct captcha";
		}else{
			echo "Invalid captcha";
		}
	}

?>