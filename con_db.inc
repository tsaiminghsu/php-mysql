<?php
$db_host="localhost";
$db_id="root";
$db_pw="123456789";
$db_link=mysql_connect($db_host,$db_id,$db_pw);
if(!$db_link)
  die("MysqlLinkError");
$sel_db=mysql_select_db("ai2");
if(!$sel_db)
  die("SelectDbError");
mysql_query("SET NAMES 'UTF8'");
//echo "連接成功";
?>