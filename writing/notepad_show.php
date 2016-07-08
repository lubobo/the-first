<?php 
include_once'login.php';

$sql="SELECT * FROM notepad";
$result=$conn->query($sql);
if (!$result) die($conn->error);
$rows=$result->num_rows;

$records_per_page=8;

if (isset($_GET['note_page'])) {
    $page=intval($_GET['note_page']);
}else $page=1;

$j=$records_per_page;
$total_records=$rows;
$total_page=ceil($total_records/$records_per_page);
$started_record=$records_per_page*($page-1);
mysqli_data_seek($result, $started_record);

while ($row=mysqli_fetch_array($result)and $j>0) {
  echo'<p class="p2">'.$row['name'].':'.'</p>';
  echo'<p class="p1">'.$row["content"].'</p>';
  echo'<p class="p3">'.$row['time'].'</p>';
  if(isset($_SESSION['admin'])) {
    if(isset($_SESSION['admin'])){
      echo'<a  class="a3" href="http://localhost//writing//notepad_delete.php?name='.$row['name'].'"><i class="icon-trash icon-1x"></a></i>';
    }
  }
 $j--;
}
  echo "<p class='p4'>";
  if ($page>1) {
    echo "<a class='a2' href='blog.php?note_page=1'>首页  </a>";
    echo "<a class='a2' href='blog.php?note_page=".($page-1)."'> 上一页 </a>";
   for ($i=1; $i <=$total_page; $i++) { 
    echo "<a class='a2' href='blog.php?note_page=$i'> $i </a>";
  }   
  } 
  if ($page<$total_page) {
    echo "<a class='a2' href='blog.php?note_page=".($page+1)."'> 下一页 </a>";
    echo "<a class='a2' href='blog.php?note_page=".($total_page)."'>尾页  </a>";
  }
$result->close();
$conn->close();
?>
<?php include_once"footer.php";?>