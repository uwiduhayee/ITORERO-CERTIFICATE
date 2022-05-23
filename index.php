<?php
			require_once 'connection_pdo.php';
			session_start();
			if(isset($_POST['login'])){
				$username= $_POST['username'];
				$password= $_POST['password'];
				if(empty($username)){
					$errorMsg[]= "Please Fill Username";
				}elseif(empty($password)){
					$errorMsg[]= "Please fill Password";
				}else{
					try{
						$sql=$db->prepare("SELECT * FROM users WHERE username=:uname AND password=:upassword");
						$sql->execute(array(':uname'=>$username,':upassword'=>$password));
						$row= $sql->fetch(PDO:: FETCH_ASSOC);
						if($sql->rowCount() > 0){
							if($username==$row['username']){
								if($password==$row['password']){
									$_SESSION['user_login']= $row['userid'];
									$loginMsg= "Successfully Login...";
									header("refresh:2; register.php");
								}else{
									$errorMsg[]= "Wrong Password";
								}
								}else{
									$errorMsg[]= "Wrong Username";
							}
						}
					}catch(PDOException $e){
						$e->getMessage();
					}
				}
			}
			?>

			<?php
			if(isset($errorMsg)){
				foreach($errorMsg as $error){
		
			?>
			<div class="errorMsg form-control">
				<strong><?php echo $error;?></strong>
			</div>
			<?php
				}
			}
			if(isset($loginMsg)){

			?>
			<div class="loginMsg form-control">
				<strong><?php echo $loginMsg;?></strong>
			</div>
			<?php
			}
			?>
<!DOCTYPE html>
<html>
<head>
	<title>urugerero</title>
<script language="javascript"type="text/javascript">
   window.history.forward();</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	body
	{

	background-image: url("d.png");	
	background-size: cover;
	}
	#login
{
  background:#fff;
  margin-left: 0px;
  border: 2px solid darkblue;
  width: 300px;
 
}
#container input[type="sabmit"]{


background-color:red; 


}
#container
{
	top:300px; 
	position:absolute;
	left:440px; 
	border-radius:30px;  
 
  margin-left:0px;
}
#menu ul li
{
color: white;
font-size: 25px;
list-style: none;	
}
</style>
</head>
<body>
	<center>
<div id="back">
	<br>
	<table class="heading" border="0" width="1000" height="100"><tr><td width="120" height="100"><img src="fg.jpg" style="border-radius: 8px;" width="120" height="100"></td><td><center><font face="algerian" size="6">URUGERERO CERTIFICATION MANAGEMENT SYSTEM</center></font></td><td width="120" height="100"><img src="fg.jpg" style="border-radius: 8px;" width="120" height="100"></td></tr></table>
	<br>
	<div id="menu">
		<ul>

			<li><a href="index.php">Welcome To Urugerero Website</a></li>
			
		</ul>
	</div>	
	<br>
	<div id="body-content">
		<table border="1" class="home-content">
			<tr>
				<td>
					<div id="container">
  <div id="text">
    <u><p><font size="5">ADMIN LOG IN</p></font></u>
  </div><div></div>

<div id="login">
  <form method="post" action="">
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp user name</p> <input type="text" name="username" placeholder="username" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 70%; " >
    <p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp password</p><input type="password" name="password" placeholder="password" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px; width: 70%; "><p>
      <br>
      <br>
      </div>
    <input type="submit" name="login" value="login" style="padding: 2px; background:#666633; border-radius: 2px; margin-left: 0%; width: 70%;height: 30px; font-size: 15px; border: 1px solid darkblue;"></p>
  </form>
</div>
 </div>	
			
		</table>
	</div>
	<br>
	<div id="footer">
		<i>Copyright Designed by Dieudonne and Marie Josee</i>
	</div>
	<br>
</div>
</center>
</body>
</html>