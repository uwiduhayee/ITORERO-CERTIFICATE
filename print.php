<!DOCTYPE html>
<html>
<head>
  <title></title>
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

</head>
<body>

</body>
</html>
<?php
require 'connection_pdo.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM participants WHERE par_id=:id';
$statement = $db->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['firstname'])  && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['phonenumber']) && isset($_POST['previousschool']) && isset($_POST['center']) && isset($_POST['year']) ) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $phonenumber = $_POST['phonenumber'];
  $previousschool = $_POST['previousschool'];
  $center = $_POST['center'];
  $year = $_POST['year'];
  $statement = $db->prepare($sql);
  if ($statement->execute([':firstname' => $firstname, ':lastname' => $lastname, ':id' => $id])) {
   
  }



}


 ?>
 <div>
  <center>
            <img src="nic logo.jpg" alt="nic logo" />
  </center>
 </div>
<center><u><h2><i>URUGERERO CERTIFICATE</i></h2></u>

 This Certificate of Completion is awarded to <b> <?= $person->firstname; ?>   <?= $person->lastname; ?> </b> for <br>the outstanding completion of <b>URUGERERO</b> <br>and center of training  is <b><?= $person->center; ?></b> after completing scendary school at <b> <?= $person->previousschool; ?> </b><br><br><br>

 
<left><b>CEO of National Itorero Commission</b><br> <b>ZIGIRA Joseph</b><br><br><br><br><br>
Signature and Stamp</left> <right></right><br>

      <input name="print" type="button" value="Print" id="printButton" onClick="printpage()">
    </center>      
   
    </div>
  </div>
</div>


