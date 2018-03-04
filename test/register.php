<?php
require "conn.php";
$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$password=$_POST["password"];
$mysql_query = "insert into emplyee_data(name,age,surname,username,password) values('$name','$age','$surname','$username','$password')";

if($conn->query($mysql_query)===TRUE)
{
echo "Insert Successfully";
}
else
echo "Error: ".$mysql_query."<br>".$conn->error;
$conn->close();
?>