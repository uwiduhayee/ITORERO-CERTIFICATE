
<html>
<head>
<title>MEN Participant Report</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<input name="print" type="button" value="Print" id="printButton" onClick="printpage()">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
      <table width="595" border="0" cellspacing="0" cellpadding="0">
       
<div id="text">
    
<tr>
    <td height="156">&nbsp;</td>

    </h2>
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

  
  

       

    

<center><h1> <u> <b> LIST OF  MEN REPORT</b></u></h1></center>
<?php
require 'connection_pdo.php';
$sql ="SELECT * from participants where gender='male'";
$statement = $db->prepare($sql);
$statement->execute();
$participants = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
     
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
    
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<style type="text/css" media="print">
.hide{display:none}
</style>
<style type="text/css" media="print">
.hide{display:none}
</style>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>

    <td height="95">&nbsp;</td>
    <td><div align="right">
   </div>
</body>
</html>
        <div align="center">
      </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="95">&nbsp;</td>
    <td><div align="right">
   </div>
</body>
</html>