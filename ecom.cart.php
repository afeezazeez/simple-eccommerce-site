<?php

session_start();
	
	if (isset($_GET['p'])) {

		$price=$_GET['p'];
		
		if (!isset($_SESSION['total'])) {   
			$_SESSION['total']=$price;
			$_SESSION['items']=1;
		}
		else{
			$_SESSION['total']=$_SESSION['total']+$price;
			$_SESSION['items']++;
		}

		header('Location: ecom.php');
	}


?>