<?php 
require('functions/login-function.php');
require('config.php');

if (isset($_POST['enter']) ) {
 $userName = 'admin';
 $userPassword = '123456';
  	
  	if($_POST['login']== $userName) {
  	
  		 if($_POST['password']== $userPassword) {	
	  	 $_SESSION['user'] = $userName;
	  	 header('Location: ' . HOST . 'index.php');
 		}
 	}
}

include('views/head.tpl');
include('views/login.tpl');
include('views/footer.tpl');

?>