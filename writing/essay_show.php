<?php 
include_once'login.php';

session_start();
$conn->select_db("blog");
$sql="SELECT * FROM essay";

$result=$conn->query($sql);
if (!$result) die($conn->error);
$rows=$result->num_rows;

$records_per_page=5;

if (isset($_GET['essay_page'])) {
    $page=intval($_GET['essay_page']);
}else $page=1;

$j=$records_per_page;
$total_records=$rows;
$total_page=ceil($total_records/$records_per_page);
$started_record=$records_per_page*($page-1);
mysqli_data_seek($result, $started_record);

while ($row=mysqli_fetch_array($result)and $j>0) {
  echo'<p class="p7" style="font-size:1.5em;">'.$row['title'].'</p>';
  echo'<p class="p8" style="font-size:1.1em;">'.substr($row["content"],0,360).'.....<a class="a5" href="http://localhost//writing//essay_show1.php?title='.$row["title"].'">查看全文</a></p>';
  echo'<p class="p9" style="font-size:1em;">'.$row['time'].'</p>'.'<br>';
  if(isset($_SESSION['admin'])) {
    if(isset($_SESSION['admin'])){
      echo'<a  class="a3" href="http://localhost//writing//essay_delete.php?title='.$row["title"].'"><i class="icon-trash icon-2x"></a></i>';
    }
  }
 $j--;
}

  echo "<p class='p6'>";
  if ($page>1) {
    echo "<a class='a4' href='blog.php?essay_page=1'>首页  </a>";
    echo "<a class='a4' href='blog.php?essay_page=".($page-1)."'> 上一页 </a>";
   for ($i=1; $i <=$total_page; $i++) { 
    echo "<a class='a4' href='blog.php?essay_page=$i'> $i </a>";
  }   
  } 
  if ($page<$total_page) {
    echo "<a class='a4' href='blog.php?essay_page=".($page+1)."'> 下一页 </a>";
    echo "<a class='a4' href='blog.php?essay_page=".($total_page)."'>尾页  </a>";
  }
?>
<?php include_once"footer.php";?>
