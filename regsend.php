<?php
mysql_connect("localhost","root","");
mysql_select_db("urugerero_db");
?>
<?php
if(isset($_POST['submit'])){
$av=$_POST['firstname'];
$a=$_POST['lastname'];
$b=$_POST['gender'];
$c=$_POST['phonenumber'];
$d=$_POST['previousschool'];
$e=$_POST['center'];
$f=$_POST['year'];



if($av&&$a&&$b&&$c&&$d&&$e&&$f){
$insert=mysql_query("INSERT INTO `urugerero_db`.`participants`(`firstname`,`lastname`,`gender`,`phonenumber`,`previousschool`,`center`,`year`)values('$av','$a','$b','$c','$d','$e','$f')");
{
 $message="new information is saved!";
print"<script>window.alert('$message');window.location='register.php';</script>";
}
}
else
{
 $message="Fill all fields to register";
print"<script>window.alert('$message');window.location='register.php';</script>";
}
}
?>