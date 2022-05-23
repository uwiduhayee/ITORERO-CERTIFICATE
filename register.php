<!DOCTYPE html>
<html>
<head>
  <title>urugerero</title>
<script language="javascript"type="text/javascript">
   window.history.forward();</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/s.css">
  <style type="text/css">
    #login
{
  background:#fff;
  margin-left: 0px;
  border: 2px solid darkblue;
  width: 300px;
 
}
#login p
{
  font-family: verdana;
  color: darkblue;


}
#container
{
 
  margin-left:0px;
}
#menu ul li
{
color: white;
font-size: 20px;
list-style: none; 
}
</style>
</head>
<body>
  <center>
<div id="back">
  <br>
  <table class="heading" border="0" width="1000" height="100"><tr><td width="120" height="100"><img src="fg.jpg" width="120" height="100"></td><td><center><font face="algerian" size="6">URUGERERO CERTIFICATION MANAGEMENT SYSTEM</center></font></td><td width="120" height="100"><img src="fg.jpg" width="120" height="100"></td></tr></table>
  <br>
   <div id="menu">
    <ul>

      <li><a href="adminhome.php"> Home</a></li>
      <li><a href="register.php">Add participant</a></li>
            <li><a href="view.php">View</a></li>
            <li><a href="men.php">Men</a></li>
            <li><a href="women.php">Women</a></li>
            <li><a href="certificate.php">Certificate</a></li>
             <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>  
  <br>
<div id="text">
    <font size="5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

Register new participants</p></font>
  </div>
<div id="reb">
<div id="login">
  <?php
require 'connection_pdo.php';
$message = '';
if (isset ($_POST['firstname'])  && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['phonenumber']) && isset($_POST['previousschool']) && isset($_POST['center']) && isset($_POST['year']) ) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $phonenumber = $_POST['phonenumber'];
  $previousschool = $_POST['previousschool'];
  $center = $_POST['center'];
  $year = $_POST['year'];
  $sql = 'INSERT INTO participants(firstname, lastname, gender, phonenumber, previousschool, center, year) VALUES(:firstname, :lastname,:gender,:phonenumber,:previousschool,:center,:year)';
  $statement = $db->prepare($sql);
  if ($statement->execute([':firstname' => $firstname, ':lastname' => $lastname, ':gender' => $gender,':phonenumber' => $phonenumber, ':previousschool' => $previousschool, ':center' => $center, ':year' => $year])) {
    $message = 'new participant is added successfully';
  }



}


 ?>
 <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
        <?php endif; ?>
  <form method="post" action="">
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp firstname</p> <input type="text" name="firstname" placeholder="firstname" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
    <p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp lastname</p> <input type="text" name="lastname" placeholder="lastname" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp gender</p> <input type="text" name="gender" placeholder="gender" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
    

    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp phonenumber</p> <input type="number" name="phonenumber" placeholder="phonenumber" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp previous school</p> <input type="text" name="previousschool" placeholder="privious school" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Center </p> <input type="text" name="center" placeholder="center of urugerero" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp year</p> <input type="number" name="year" placeholder="year" style="border: none; border-bottom: 2px solid darkblue;margin-left:40px;  width: 50%; " >

  
      <br>
      <br>
      </div>
    <input type="submit" name="submit" value="submit" style="padding: 2px; background:#666633; border-radius: 2px; margin-left: 0%; width: 40%;height: 30px; font-size: 15px; border: 1px solid darkblue;"></p>
  </form>
</div>

   </div>
</body>
</html>