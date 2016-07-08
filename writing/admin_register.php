<?php include_once"header.php";?>
<?php include_once'login.php';
if (isset($_POST['logout'])) {
	session_start();
	unset($_SESSION['admin']);
	echo "<script language=javascript>alert('已登出该站点');location.href='blog.php';</script>";
}
if (empty($_POST['email'])&&empty($_POST['password'])) {
	echo "<script language='javascript'>alert('请输入登陆信息');history.back();</script>";
}
elseif (empty($_POST['email'])) {
	echo "<script language='javascript'>alert('请输入Email');history.back();</script>";
}elseif (empty($_POST['password'])) {
	echo "<script language='javascript'>alert('请输入Password');history.back();</script>";
}
elseif (isset($_POST['email'])&&isset($_POST['password'])) {
	$eam=$_POST['email'];
	$pwds=$_POST['password'];
$conn->select_db('blog');
$sql="SELECT * FROM `admin` WHERE email='$eam' and pwds='$pwds'";
$result=$conn->query($sql);
$row=$result->num_rows;

session_start();
if ($row>0) {
	$_SESSION['email']=$eam;
	$_SESSION['password']=$pwds;
	$_SESSION['admin']='true';
	echo "<script language=javascript>location.href='blog.php';</script>";
}
else{
	unset($_SESSION['admin']);
	echo "<script language=javascript>alert('没有权限登陆,请返回核对登陆信息');location.href='blog.php';</script>";
}

}

?>
<title>add-admin</title>