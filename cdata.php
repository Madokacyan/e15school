<? include_once "base.php";
  $seq=$_POST['cseq'];
  $crow=mysqli_fetch_array(mysqli_query($link,"select * FROM class where seq='$seq'"));
?>
<form action="api.php?do=class" method="post">
課程項目: <input type="text" name="title" value="<?=$crow['title']?>"  style="width:235px">
<br>
課程內容:
  <textarea name="con" cols="30" rows="10"><?=$crow['con']?></textarea>
  <div class="ct">
    <input type="hidden" name="hseq" value="<?=$crow['seq']?>">
    <input type="submit" value="編輯">
    <input type="button" value="刪除" onclick="delc(<?=$crow['seq']?>)">
  </div>
</form>

<script>
function delc(seq){
  $.post("api.php?do=delc",{seq},function(){
    location.href="main.php?do=admin&redo=class";
  })
}
</script>