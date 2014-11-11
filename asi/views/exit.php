<?php
session_start();
session_destroy();

session_start();
if(@$_SESSION['UserID']>0){
	;
}else{
	header ("Location: ../controller/login.php");
	
}

?>