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
  
<body>
<input name="print" type="button" value="Print" id="printButton" onClick="printpage()">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
      <table width="595" border="0" cellspacing="0" cellpadding="0">
       
<div id="text">
    

<center><h1> <u> <b> LIST OF PARTICIPANTS </b></u></h1></center>
<?php
require 'connection_pdo.php';
$sql = 'SELECT * FROM participants';
$statement = $db->prepare($sql);
$statement->execute();
$participants = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table border="1" cellspacing="0">
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Gender</th>
          <th>PhoneNumber</th>
          <th>PreviousSchool</th>
          <th>Center</th>
          <th>Year</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php foreach($participants as $person): ?>
          <tr>
            <td><?= $person->par_id; ?></td>
            <td><?= $person->firstname; ?></td>
            <td><?= $person->lastname; ?></td>
            <td><?= $person->gender; ?></td>
            <td><?= $person->phonenumber; ?></td>
            <td><?= $person->previousschool; ?></td>
            <td><?= $person->center; ?></td>
            <td><?= $person->year; ?></td>
      
           <TD style="color:#0000CC" bgcolor="#73D791">
              <a href="edit.php?id=<?= $person->par_id ?>"  ><font size="5" color="#0000FF">Edit</font></a>
            </TD>
           <TD style="color:#0000CC" bgcolor="#73D791">
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->par_id ?>" class='btn btn-danger'><font size="5" color="#0000FF">Delete</font></a></TD>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>


    <td height="95">&nbsp;</td>
    <td><div align="right">
   </div>
</body>
</html>