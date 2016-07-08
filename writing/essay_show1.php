<?php include('header.php');?>
<title>BLOG</title>
  <?php //header("Location: http://localhost//writing//admin.php");?>
 <div class="div0">
  <div class="div1" id="a3">  
   <a class="a1" href="http://localhost//writing//blog.php">首页</a>
   <a class="a1" href="#">分类</a>
   <a class="a1" href="#">归档</a>
   <a class="a1" href="essay.php">写作</a>
   <a class="a1" href="#">朋友</a>
   <a class="a1" href="notepad.php">留言</a>
   <a class="a1" href="http://www.luguobo.com/">关于</a>
  </div>
 <div>
 	<form class="form1">
 	  <input class="input1" type="search" name="name" >
 	  <i class="icon-search" style="position:relative;top:-8px;left:4%; color:white"></i>
 	</form>
 </div>
  <a class="a1" style="position:absolute;top:2%;right:3.2%;" href="admin.php">管理站点</a>
</div>
<div class="div3">
 <?php 
include_once'login.php';

session_start();
$conn->select_db("blog");
if (isset($_GET['title'])) {
	$ID=$_GET['title'];
}
$sql="SELECT * FROM essay WHERE `essay`.`title`= '$ID'";
$result=$conn->query($sql);
if (!$result) die($conn->error);
$rows=$result->num_rows;
$row=mysqli_fetch_array($result);
  echo'<p class="p7" style="font-size:1.5em;">'.$row['title'].':'.'</p>';
  echo'<p class="p8" style="font-size:1em;">'.$row["content"].'</p>';
  echo'<p class="p9" style="font-size:1em;">'.$row['time'].'</p>'.'<br>';
?>
</div>
<div class="div4">
	<i class="icon-tags" style="position:absolute;left:28%;top:1.2%;"></i><p style="position:absolute;left:40%;top:-1.8%;font-family:'幼圆'">Message</p>
  <?php include_once"notepad_show.php";?>
</div>

<?php include_once("footer.php");?>