<?php
$host = "localhost";
$db = "urugerero_db";
$username = "root";
$password = "";
try{
$db= new PDO('mysql:host='.$host.';dbname='.$db,$username, $password);
}
catch(exception $ex){
die("Error : " . $ex->getMessage());
}
?>