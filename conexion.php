<?php 	
	$host="localhost";
	$user="root";
	$password="";
	$db="actasu"; 
	$con = new mysqli($host,$user,$password,$db);	
	
	if ($con -> connect_errno) {
		die( "Fallo la conexi¨®n a MySQL: (" . $con -> mysqli_connect_errno() 
		. ") " . $con -> mysqli_connect_error());
	} 
?>

