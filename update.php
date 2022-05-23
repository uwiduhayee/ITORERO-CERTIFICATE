<?php
include 'connection.php'
@$id=$_POST['id'];
@$fullnames=$_POST['fullnames'];
@$age=$_POST['age'];
@$query=mysql_query("UPDATE student set fullnames='$fullnames', age='$age'");
if($query)
{
echo "<script>window.alert('This user information is updated!');window.location='select.php'</script>";
}
else
{
echo "<script>window.alert('Not successfully updated!');window.location='select.php'</script>";
}
?>
