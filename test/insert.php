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

$sql = "INSERT INTO students(sno,name,address,birthday) VALUES('S007','小龍女','台北縣新店市','1970-04-11')";
mysqli_query($link,$sql);
//if(mysqli_query($link,$sql))
echo "資料庫新增記錄成功,影響記錄數：".mysqli_affected_rows($link)."<br/>";

//mysqli_free_result($result);
mysqli_close($link);
?>