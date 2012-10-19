<?php

session_start();
include('config.php');
$username = mysql_real_escape_string($_POST['username']);
$password =  mysql_real_escape_string(md5($_POST['password']));

//Command untuk select username dan password
$cmd = "SELECT * FROM klien where (username='$username' and password='$password')";
echo $cmd;
$query = mysql_query($cmd);
$row=mysql_fetch_array($query);
if ($row){
	//command berjaya. 
	//save session, username dengan value username dari post
	//$_SESSION['username'] = $_POST['username'];
	//access session
	$_SESSION['access'] = $row['access'];
	$_SESSION['username'] = $row['username'];
	if($_SESSION['access'] == 0){
		//echo $_SESSION['access'];
		header('Location: tieka.php');
		
	}
	if($_SESSION['access'] == 1){
		//echo $_SESSION['access'];
		header('Location: tieka.php');
	}
	
}
else{
	$_SESSION['failed'] = "FAILED";

	//header('Location: index.php');
}

?>

