<?php
mysql_connect("localhost","root","");
mysql_select_db("urugerero_db");
?>


<?php


@$id=$_POST['id'];
@$av=$_POST['fname'];
@$a=$_POST['lname'];
@$b=$_POST['gender'];
@$c=$_POST['phonenumber'];
@$d=$_POST['previousschool'];
@$e=$_POST['center'];
@$f=$_POST['year'];




$query=mysql_query("UPDATE `urugerero_db`.`participants` SET `firstname` = '$av',`lastname` = '$a',`gender` = '$b',`phonenumber` = '$c',`previousschool` = '$d',`center` = '$e',`year` = '$f' WHERE `participants`.`par_id` ='$id'") or die("try again");
if (!$query)
{
echo "<script>window.alert(' information is updated!');window.location='view.php'</script>";
}
else
{
echo "<script>window.alert(' successfully updated!');window.location='view.php'</script>";
}
?>