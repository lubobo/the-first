<?php include('header.php');?>
<title>Admin</title>
<div class="div5">
<h1 align="center">Login</h1>

<form action="admin_register.php" method="POST" name="myform">

  <div class="input-prepend">
    <span class="add-on"><i class="icon-envelope" style="position:absolute;top:40%;left:13%;"></i></span>
    <input type="text" name="email" class="input_admin" placeholder="Email">
  </div>

  <div class="input-prepend">
  <span class="add-on"><i class="icon-key" style="position:absolute;top:53%;left:13%;"></i></span>
  <input type="password" name="password" class="input_admin" style="position:absolute;top:52%;left:22%;" placeholder="Password">
  <input class="input2" style="position:absolute;top:68%;left:23%;height:10%; width:20%; font-size:0.95em;font-family:'幼圆'" type="submit" name="submit" value="登陆">

  <input class="input2" style="position:absolute;top:68%;left:64%;height:10%; width:20%; font-size:0.95em;font-family:'幼圆'" type="submit" name="logout" value="注销">
  </div>
  </form>
</div>
<?php include_once("footer.php");?>