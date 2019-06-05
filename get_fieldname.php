<?php
header("Content-Type:text/html;charset=utf8");
include "con_db.inc";
$sql_query=$_GET["sql"];
echo $sql_query . "</br>";
$result=mysql_query($sql_query);

if ($result)
{
	for ($i=1; $i<=mysql_num_fields($result); $i++) 
	{
	$row_result = mysql_fetch_field($result);
	echo $row_result->name;
	if ($i < mysql_num_fields($result))
	echo " ";
	}
}
else //如果沒有讀取資料時，則顯示「查無此資料!」
echo "查無此資料!";
mysql_close($db_link);
?>