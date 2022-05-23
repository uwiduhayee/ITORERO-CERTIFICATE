<?php
session_start();
    // Include database connection settings

mysql_connect("localhost","root","");

mysql_select_db("urugerero_db") or DIE('Database name is not available!');

$username=$_POST['username'];
$password=$_POST['password'];


$user = stripslashes($username);
$pass =stripslashes($password);

$username=mysql_real_escape_string($user);
$userpassword=mysql_real_escape_string($pass);


      $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	  
$sql = mysql_query($query);

      $rows = mysql_num_rows($sql);
	  $fet=mysql_fetch_array($sql);
      if ($rows==1) 
	  {
      // Set username session variable

      $_SESSION['username'] =$fet['userid'];
	 

     // Jump to secured page
	  $rows;
      
    echo '<script type="text/javascript">alert("Welcome!");window.location=\'register.php\';</script>';   
     }
     else {
	
     // Jump to login page
     $rows;
	
    echo '<script type="text/javascript">alert("Wrongly typed username or password");window.location=\'index.php\';</script>';
     }
     exit;
     ?>
