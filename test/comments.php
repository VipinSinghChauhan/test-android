<?php 
$db = mysql_connect("localhost","root","");
$er = mysql_select_db("zoroute");
$result = mysql_query("select * from zorouteInfo");
while($array = mysql_fetch_row($result))
{
echo $array[1]."<br>";
echo $array[3]."<br>";

}

?>