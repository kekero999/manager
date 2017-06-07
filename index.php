<?php
  $var2 = $_GET['State'];   //Tên biến State
  $fileContent = $var2;
  file_put_contents("data.html", $fileContent); //Lưu giá trị của biến State vào file data.html
  echo 'sssssssssssddddd';
?>
