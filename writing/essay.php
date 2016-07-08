<?php include_once"header.php";?>
<title>Eassy</title>
<div class="div3" style="position:absolute;top:4%;">

<form class="form2" method="POST" action="essay_save.php">
    <p class="p5">撰写新文章</p>

	<input style="position:absolute;top:5%;right:13%;border:1px solid black;height:5%;width:75%;background-color: white;font-family:'幼圆';color: black;font-size: 1.15em;" type='text' name='title' placeholder='在此输入标题'>

	<textarea class="textarea2" placeholder="在此输入文章内容" name="content"></textarea>


	<input style="position:absolute;top:80%;left:8%;border:1px solid black;height:5%;width:35%;background-color: white;font-family:'幼圆';color: black;font-size: 1.15em;" type='text' name='theme' placeholder='在此输入主题'>

	<input style="position:absolute;top:88%;left:8%;border:1px solid black;height:5%;width:35%;background-color: black;font-family:'幼圆';color: white;font-size: 1.15em;" type="submit" name="submit" value="保存">
</form>

<form method="POST" action="file_add.php">

	<input type="file" name="userfile" style="position:absolute;top:67%;left:60%;font-family:'幼圆';font-size: 1em;">
    <input type="submit" value="上传文件" style="position:absolute;top:73%;right:33.5%;font-family:'幼圆';font-size: 1em;">
    
</form>

</div>
<?php include_once"footer.php";?>