<?php
include_once"login.php";

$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$num=$_POST['num'];
$content=$_POST['content'];
$time=date('Y-m-d H:i:s',strtotime("8hours"));

if (empty($name)) {
	echo "<script language='javascript'>alert('请客官留下大名后方可留言哦');history.back();</script>";
}elseif (preg_match("/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u",$name)=='0') {
	echo "<script language='javascript'>alert('用户名格式有误');history.back();</script>";
}

elseif (empty($email)) {
	echo "<script language='javascript'>alert('请客官留下邮箱后方可留言哦');history.back();</script>";
}elseif (preg_match("/^[\w\d]+[\w\d-.]*@[\w\d-.]+\.[\w\d]{2,10}$/i",$email)=='0') {
	echo "<script language='javascript'>alert('邮箱格式有误');history.back();</script>";
}

elseif (empty($website)) {
	echo "<script language='javascript'>alert('请客官留下网址后方可留言哦');history.back();</script>";
}elseif (preg_match("/^(http:\/\/)?(https:\/\/)?([\w\d-]+\.)+[\w-]+(\/[\d\w-.\/?%&=]*)?$/",$website)=='0') {
	echo "<script language='javascript'>alert('网址格式有误');history.back();</script>";
}

elseif (empty($num)) {
	echo "<script language='javascript'>alert('请客官留下电话后方可留言哦');history.back();</script>";
}elseif (preg_match("/^[(86)|0]?(13\d{9})|(15\d{9})|(18\d{9})$/",$num)=='0') {
	echo "<script language='javascript'>alert('手机格式有误');history.back();</script>";
}

elseif (empty($content)) {
	echo "<script language='javascript'>alert('请客官留下留言内容后方可留言哦');history.back();</script>";
}else{
$conn->select_db("blog");

 $sql="INSERT INTO notepad (id, name, email,website,num,content,time)VALUES(NULL,'$name','$email','$website','$num','$content','$time')";
 $result=$conn->query($sql);
 if(!$result)
 {
	die("数据插入失败");
 }

 header("Location: http://localhost//writing/blog.php"); 
 exit;
 $conn->mysqli_close();
}

?>