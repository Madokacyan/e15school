<? include_once "base.php";

$seq=$_POST['bseq'];

$upb=mysqli_fetch_array(mysqli_query($link,"select * from book where seq='$seq'"));
?>
<center>
<form action="api.php?do=adbook" method="post">
  <table>
    <tr>
      <td>留言標題: <input type="text" name="title" id="title" value="<?=$upb['title']?>"></td>
    </tr>
    <tr>
      <td>留言隱藏: <input type="checkbox" name="sh" id="sh" value="<?=$upb['seq']?>" <?=($upb['sh']==1)?"checked":"";?>></td>
    </tr>
    <tr>
      <td>留言內容: 
        <textarea name="bcon" id="bcon" cols="30" rows="10"  style="vertical-align:middle"><?=$upb['con']?></textarea>
      </td>
    </tr>
    <tr>
      <td class="ct">
        <input type="hidden" name="hseq" value="<?=$seq?>">
        <input type="submit" value="修改"> | 
        <input type="button" value="刪除" onclick="delb(<?=$seq?>)">
      </td>
    </tr>
  </table>
</form>

<script>
function delb(seq){
  $.post("api.php?do=delb",{seq},function(){
    location.href="main.php?do=admin&redo=book";
  })
}
</script>

<hr>

<form action="api.php?do=fb" method="post">
  <div class="ct">回覆此留言</div>
  <div>回覆內容: <textarea name="fbcon" id="fbcon" cols="30" rows="10"  style="vertical-align:middle"></textarea>
  </div>
  <div class="ct">
    <input type="hidden" name="user" value="管理者">
    <input type="hidden" name="fhseq" value="<?=$upb['seq']?>">
    <input type="submit" value="回覆">
  </div>
</form>
</center>