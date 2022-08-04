<?php
$servername="localhost";
$username="root";
$password="";
$dbname="curls";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
 die("connection end".$conn->connect_error);
}
$sql="insert into hair values('".$_POST["visitor_name"]."','".$_POST["visitor_email"]."','".$_POST["visitor_phone"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["select"]."','".$_POST["visitor_message"]."')";
if($conn->query($sql))
{
 echo "your response has been recoreded";
}
else{
 echo "error".$sql."<br>".$conn->error;
}
$conn->close();
?>
