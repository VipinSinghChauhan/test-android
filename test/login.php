<?php
require "conn.php";
$user_name=$_POST["user_name"];
$user_pass=$_POST["password"];
$user_comments = $_POST["comments"];
$mysql_qry = "select * from zorouteInfo where name like '$user_name' and password like '$user_pass' ;";
$insertData = "insert into zorouteInfo(comments) values('$user_comments')";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result)>0)
{
echo "login success comments: $user_comments";
$inserts = $conn->query($insertData);
if($inserts===true)
{
	echo "insert successfully";
}
}
else
echo "login not success";
?>