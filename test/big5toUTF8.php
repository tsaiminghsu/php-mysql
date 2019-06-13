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
  echo mysqli_get_host_info($link)."<br/>";
  echo mysqli_get_server_info($link)."<br/>";
  echo mysqli_get_server_version($link)."<br/>";

mysqli_query($link, 'SET CHARACTER SET big5');
mysqli_query($link, "SET collation_connection = 'big5_chinese_ci'");


$sql = "SELECT * FROM students";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_assoc($result)){
  echo $row["sno"]."-".$row["name"]."<br/>";
  echo $row["sno"]."-".iconv("big5","UTF-8",$row["name"])."<br/>";
}

mysqli_free_result($result);
mysqli_close($link);
?>