<?php
$link=@mysqli_connect(
      'localhost',
      'root',
      '123456789',
      'myschool');
if(!$link)
  die("無法建立連接<br/>");
else
  echo "成功建立連接!<br/>";
?>