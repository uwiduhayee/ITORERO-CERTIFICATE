


<?php
$con=mysql_connect("localhost","root","")or die("server not connected");
mysql_select_db("urugerero_db",$con) or die("no database selected");
$id=$_GET['id'];
$query=mysql_query("SELECT * FROM participants WHERE par_id='$id'") or die("no record selected");
while($row=mysql_fetch_array($query))
{
         
 $id= $row['par_id'];
        $a = $row['firstname'];
      $b = $row['lastname'];
        $c=$row['gender'];
        $d=$row['phonenumber'];
          $e=$row['previousschool'];
          $f=$row['center'];
          $g=$row['year'];
      
          
          
}
?>



<html>
<head>
    <script langauge="javascript" type="text/javascript">
window.history.forward();</script>
  <link rel="icon" href="nid.jpg">
  <link rel="shortcut icon" type="image/x-icon" href="images (11).jpg">
   <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/b.css">
  <link rel="stylesheet" type="text/css" href="css/.css">
  <style type="text/css">
     h1
  {
    font-family:initial;
    font-size: 41px;
    font-variant:small-caps;
  }
  </style>
  <title></title>
</head>
<body 
  
  
   <li style="padding-left: 75%;"><a href="sessio.php">logout
<span class="glyphicon glyphicon-off" style="float: left;">
  </a></li>
</ul>
</div><br>

<div id="body" style="background: white; height: 58%; width: 100%; box-shadow: 2px 2px 17px 6px #1E90FF ;overflow-y: scroll;">


  
        <CENTER><h1><font face="Agency FB" color="black" size="6">EDIT INFORMATION </font></h1>          <center>
         <form method="POST" action="updatecode.php" >


        <table><tr>
        <td>Id</td><td><input type="text" name="id" value="<?php echo $id ?>" read only></td></tr><tr> 
        <td>First Name:</td><td><input type="text" name="fname" required="" value="<?php echo $a ?>"></td></tr><tr>

        <td>Last Name:</td><td><input type="text" name="lname" required="" value="<?php echo $b ?>"></td></tr><tr>

           <td> gender:</td><td><input type="text" name="gender" required="" value="<?php echo $c ?>"></td></tr>

        <td>phone number:</td><td><input type="text" name="phonenumber" required="" value="<?php echo $d ?>"></td></tr><tr>

       

        <tr><td> previous school:</td><td><input type="number" name="previousschool" required="" value="<?php echo $e ?>"></td></tr>


        <tr><td> center:</td><td><input type="text" name="center" required="" value="<?php echo $f ?>"></tr>
          <tr><td> year:</td><td><input type="text" name="year" required="" value="<?php echo $g ?>"></tr>

        
           <tr><td colspan="2"> <input type="submit" name="submit" value="UPDATE"></td></tr></table>
      </form></center></font>

       </div>





</div>

  


</div><br>


</body>
</html>