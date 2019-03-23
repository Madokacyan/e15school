<?
  if(empty($_GET['bseq'])){
?>
<div class="ct bb" style="color:#6dd0cd"> 新 增 留 言 </div>

<br>
<form action="api.php?do=addb" method="post">
<fieldset class="ma ct bb lh3 book">
  標題: <input type="text" name="title" id="title" size="86"><br>
  內容: <textarea name="bcon" cols="77" rows="10" style="vertical-align:middle"></textarea><br>
  <input type="submit" value="新增" class="ct"><br>
</fieldset>
</form>

<?
  }else{
    $edb=mysqli_fetch_array(mysqli_query($link,"select * from book where seq='".$_GET['bseq']."'"));
?>
<div class="ct bb" style="color:#6dd0cd"> 刪 編 留 言 </div>

<br>
<form action="api.php?do=addb" method="post">
<fieldset class="ma ct bb lh3 book">
  標題: <input type="text" name="title" id="title" size="86"><br>
  內容: <textarea name="bcon" cols="77" rows="10" style="vertical-align:middle"></textarea><br>
  <input type="submit" value="新增" class="ct"><br>
</fieldset>
</form>

<?
  }
?>