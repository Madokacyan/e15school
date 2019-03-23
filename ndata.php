<? include_once "base.php";
  $nseq=$_POST['nseq'];
  $edn=mysqli_fetch_array(mysqli_query($link,"select * from news where nseq='".$nseq."'"));
  if($nseq>0){
?>
<form action="api.php?do=adnews" method="post" enctype="multipart/form-data">
  <table class="ma lh3">
    <tr>
      <td>消息標題: <input type="text" name="title" value="<?=$edn['title']?>"></td>
    </tr>
    <tr>
      <td>詳細資料: <input type="file" name="file"></td>
    </tr>
    <tr>
      <td>消息圖片: <input type="file" name="img"></td>
    </tr>
    <tr>
      <td>消息網頁: <input type="text" name="url" value="<?=$edn['url']?>"></td>
    </tr>
    <tr>
    <? 
    $new=($edn['new']==1)?"checked":"";
    $marq=($edn['marq']==1)?"checked":"";
    ?>
      <td>顯示NEW: <input type="checkbox" name="new" value="<?=$nseq?>"<?=$new?> >是</td>
    </tr>
    <tr>
      <td>跑馬燈顯示: <input type="checkbox" name="marq" value="<?=$edn['nseq']?>" <?=$marq?>>是</td>
    </tr>
    <tr>
      <td class="ct">
        <input type="hidden" name="hseq" value="<?=$nseq?>">
        <input type="submit" value="編輯">
        <input type="button" value="刪除" onclick="deln(<?=$nseq?>)">
        <input type="reset" value="重置">
      </td>
    </tr>      
  </table>    
</form>

<script>
  function deln(nseq){
    $.post("api.php?do=deln",{nseq},function(){
      console.log(nseq)
      location.href="main.php?do=admin&redo=news";
    })
  }
</script>


<?
  }else{
    echo "<div class='ct'>請選擇</div>";
  }
?>