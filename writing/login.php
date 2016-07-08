<?php
  $conn= new mysqli('localhost','root','13653917lgbdqq');
  if ($conn->connect_error) {
  	die("数据库连接失败".$conn->connect_error);
  }
?>