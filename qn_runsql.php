<?php
header("Content-Type:text/html;charset=utf-8");
include"con_db.inc";
$sql_query=$_GET["sql"];
	echo $sql_query;
	echo"\n";
$result=mysql_query($sql_query);
if(mysql_affected_rows()){
	echo"(INSERT UPDATE DELETE)指令執行成功";
//        echo substr($sql_query, 1);
}
else{
	echo"(INSERT UPDATE DELETE)指令執行失敗";
//        echo strpos("You love php, I love php too!","php");
//        echo substr($sql_query, 1);
}
mysql_close($db_link);
?>