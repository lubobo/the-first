<?php include_once"header.php";?>
<title>Notepad</title>

 <div class="div2">
 	<form  action="notepad_add.php" method="POST" name="myform">
 		<p align="center" style="font-family:'Microsoft YaHei';font-size:1.75em;color:#808080;">留言板</p>
        <textarea class="textarea1" name="content" placeholder='Notepad...'></textarea>
 		<input class="input3" type="text" name="name" placeholder='Name' style="position:absolute;top:65%;left:17%;"><p style="font-family:'Microsoft YaHei';font-size:1.20em;color:#808080;;position: absolute;top:63%;left:12%;">称呼</p>

 		<input class="input3" type="text" name="email" placeholder='Email'><p  style="font-family:'Microsoft YaHei';font-size:1.20em;color:#808080;position: absolute;top:68%;left:12%;">邮箱</p>

 		<input class="input3" type="text" name="website" placeholder='Website' style="position:absolute;top:65%;left:62%;"><p style="font-family:'Microsoft YaHei';font-size:1.20em;color:#808080;position: absolute;top:63%;left:57%;">网站</p>

 		 <input class="input3" type="text" name="num" placeholder='Number' style="position:absolute;top:70%;left:62%;"><p style="font-family:'Microsoft YaHei';font-size:1.20em;color:#808080;position: absolute;top:68%;left:57%;">电话</p>
 		 
 	     <input class="input2" type="submit" name="submit">
 	</form>
 </div>
<?php include_once"footer.php";?>