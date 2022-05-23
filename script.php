<?php
include 'connection.php';

if (isset($_POST["register"])) {
	$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$number=$_POST["number"];
$pschool=$_POST["pschool"];
$center=$_POST["center"];
$year=$_POST["year"];
	$insert=mysql_query("INSERT INTO participant(fname,lname,gender,phnnbr,previous_school,center,year) VALUES ('$fname','$lname','$gender','$number','$pschool','$center','$year') ");
	if ($insert)
	{
		header("Location:list.php");
	}
	else{
		die(mysql_error()) ;
	}
	mysql_connect();
}


?>