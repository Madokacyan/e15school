<? include_once "base.php";
  $iseq=$_POST['iseq'];
  //echo "imgseq".$iseq;
  $edimg=mysqli_fetch_array(mysqli_query($link,"select * from imgnews where seq='".$iseq."'"));
  if($iseq>0){
?>
<form action="api.php?do=adimg" method="post" enctype="multipart/form-data">
  <table class="ma lh3">
    <tr>
      <td>圖片位置: <input type="file" name="file"></td>
    </tr>
    <tr>
      <td>圖片連結: <input type="text" name="url"  value="<?=$edimg['url']?>"></td>
    </tr>
    <tr>
      <td>替代文字: <input type="text" name="alt" value="<?=$edimg['alt']?>"></td>
    </tr>
    <tr>
      <td class="ct">
        <input type="hidden" name="hseq" value="<?=$iseq?>">
        <input type="submit" value="編輯">
        <input type="button" value="刪除" onclick="delimg(<?=$iseq?>)">
        <input type="reset" value="重置">
      </td>
    </tr>      
  </table>    
</form>

<script>
  function delimg(iseq){
    $.post("api.php?do=delimg",{iseq},function(){
      console.log(iseq)
     location.href="main.php?do=admin&redo=news";
    })
  }
</script>


<?
  }else{
    echo "<div class='ct'>請選擇</div>";
  }
?>