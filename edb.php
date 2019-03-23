<? include_once "base.php";
if (isset($_POST['del'])) {
  $seq = $_POST['edhseq'];
  $delro =mysql_query($link,"DELETE FROM book WHERE seq = '$seq'")or die(mysql_error());
  header("location:main.php?do=book");
}

$edseq=$_POST['bseq'];
$edb=mysqli_fetch_array(mysqli_query($link,"select * from book where seq='".$_POST['bseq']."'"));
?>
<div class="ct bb" style="color:#6dd0cd"> 刪 編 留 言 </div>

<br>
<form action="api.php?do=edb" method="post">
<fieldset class="ma ct bb lh3 book">
  標題: <input type="text" name="title" id="title" size="86" value="<?=$edb['title']?>"><br>
  內容: <textarea name="bcon" cols="77" rows="10" style="vertical-align:middle"><?=$edb['con']?></textarea><br>
  <input type="hidden" name="edhseq" value="<?=$_POST['bseq']?>">
  <input type="submit" value="編輯"> | 
  <input type="button" name="del" value="刪除" onclick="delb(<?=$edseq?>)">
  <br>
</fieldset>
</form>
<input type ="button" onclick="location.href='?do=book'" value="回到上一頁">
<script>
function delb(seq) {
  $.post("api.php?do=delb",{seq},function(){
    location.href="main.php?do=book";
  })
}
</script>
<!--
OK
<input type ="button" onclick="location.href='main.php?do=book'" value="回到上一頁">
<button onclick="location.href='?do=book'">回到上一頁</button>
<button onclick="location.href='main.php?do=book'">回到上一頁</button>
ERROR
<input type ="button" onclick="history.back()" value="回到上一頁">
-->




