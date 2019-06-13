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

//mysqli_query($link, 'SET CHARACTER SET big5');
//mysqli_query($link, "SET collation_connection = 'big5_chinese_ci'");


$sql = "SELECT * FROM students";
$result = mysqli_query($link,$sql);

echo "mysqli_num_fields:" . mysqli_num_fields($result) . "<br/>";
echo "mysqli_num_rows:" . mysqli_num_rows($result) . "<br/>";

/*
while($row = mysqli_fetch_assoc($result)){
  echo $row["sno"]."-".$row["name"]."<br/>";
  echo $row["sno"]."-".iconv("big5","UTF-8",$row["name"])."<br/>";
}*/


echo '<table border="1" width="100%" id="table1">';
echo "<tr>";
while($meta = mysqli_fetch_field($result)){
  echo "<td>" . $meta->name . "</td>";
}
echo"</tr>";

$total_fileds=mysqli_num_fields($result);
while( $row = mysqli_fetch_row($result) ){
  echo "<tr>";
  for( $i  = 0 ; $i <= $total_fileds-1 ; $i++ )
    echo "<td>" . $row[$i] . "</td>";
  echo "</td>";
}

echo '</table>';

mysqli_free_result($result);
mysqli_close($link);
?>