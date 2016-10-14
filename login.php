<?php
	
	session_start();

	if (isset($_POST['user']) && isset($_POST['password'])) {

		if($_POST['user'] === 'paulgremmen' && $_POST['password'] === '1017keizer534'){
			$_SESSION['login_user']= $_POST['user'];	
			header("Location: ../keyword_results.php");	
			exit;
		}
		else{
			session_destroy(); 
			if(isset($_SESSION['login_user']))
			unset($_SESSION['login_user']); 
			header("Location: ../");
			exit;
		}

	} else {
			session_destroy(); 
			if(isset($_SESSION['login_user']))
			unset($_SESSION['login_user']); 
			header("Location: ../");
			exit;
	}

?>
