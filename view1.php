<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=0, left=0, top=0"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 600px;">
<center>
	<table border="1" style="margin-left: 500px; margin-right: 450px; width: 600px; border-style: dashed;" cellpadding="30px" >
	<tr><td width="120" height="100"><img src="fg.jpg" style="border-radius: 8px;"width="120" height="100" >
			
			 <strong>REPUBLIC OF RWANDA</strong><br>
			     <strong>KAMONYI DISTRICT</strong><br>
			     <strong> ABESAMIHIGO BA KAMONYI</strong><br>
                 <strong>URUGERERO  CERTIFICATE</strong><br>
			     
			<!--mg src="images/rara.gif" height="60" width="200"></img>-->
		</td>
	</tr>
<tr>
		<td>
		<?php
$con=mysql_connect("localhost","root","") or die("the database is incorrect");
mysql_select_db("urugerero_db",$con) or die("the db is not found");

?>
 <?php
$a=$_GET['view'];
$result = mysql_query(("SELECT * FROM participants where par_id=$a "),$con);
while($row = mysql_fetch_array($result))
	{
		
		echo '<b>First Name:</b> '.$row['firstname'].'<br>';
		echo '<br>';
		echo '<b>Last Name:</b> '.$row['lastname'].'<br>';
		echo '<br>';
		echo '<b>Phonenumber</b>: </b>'.$row['phonenumber'].'<br>';
		echo '<br>';
		echo '<b>Gender:</b> '.$row['gender'].'<br>';
		echo '<br>';
		echo '<b>Previousschool:</b> '.$row['previousschool'].'<br>';
		echo '<br>';
		echo '<b>Center:</b> '.$row['center'].'<br>';
		echo '<br>';
		echo '<b>Year:</b> '.$row['year'].'<br>';
		echo '<br>';

		
		
		}
		
		?>
		<b>We thank you for how you attended in Urugerero which take place at
		KAMONYI DISTRICT</b> 
		<br><br>
       <b>Done On: <?php 
		$date=date('Y/m/d');
		
				echo $date;
				?><b><br><br>
				<b>Signature & stamp: <b> ............................
		</td>
	</tr>
		</td>
	</tr>
</table>
</center>
</div>
<a href="view.php"> <font size="+2" color="blue-green" border-radius="30" > <td> back </td></font></a>