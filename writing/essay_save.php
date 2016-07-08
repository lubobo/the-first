<?php 
include_once"login.php";

$title=$_POST['title'];
$theme=$_POST['theme'];
$content=$_POST['content'];
$time=date('Y-m-d H:i:s',strtotime("8hours"));

if (empty($title)) {
	echo "<script language='javascript'>alert('标题不能为空');history.back();</script>";
}elseif (empty($theme)) {
	echo "<script language='javascript'>alert('请选择留下主题');history.back();</script>";
}elseif (empty($content)) {
	echo "<script language='javascript'>alert('文章不能为空');history.back();</script>";
}
elseif (!empty($title)||!empty($theme)||!empty($content)) {
$conn->select_db("blog");

 $sql="INSERT INTO essay (id, title, theme,content,time,label)VALUES(NULL,'$title','$theme','$content','$time','$label')";
 
 $result=$conn->query($sql);
 header("Location: http://localhost//writing/blog.php"); 
 exit;
 $conn->mysqli_close();
}
?>