<?php
include_once"header.php";
include_once"login.php";
$conn->select_db("blog");
if (isset($_GET['name'])) {
	$ID=$_GET['name'];
}
$sql="DELETE FROM `notepad` WHERE `notepad`.`name`= '$ID'";
$conn->query($sql);
header("location: http://localhost//writing/blog.php?note_page=1");
?>
