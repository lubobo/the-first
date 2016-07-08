<?php
include_once"header.php";
include_once"login.php";
$conn->select_db("blog");
if (isset($_GET['title'])) {
	$ID=$_GET['title'];
}
$sql="DELETE FROM `essay` WHERE `essay`.`title`= '$ID'";
$conn->query($sql);
header("location: http://localhost//writing/blog.php?essay_page=1");
?>
