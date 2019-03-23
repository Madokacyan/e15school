<? include_once "base.php";
  $gseq=$_POST['gseq'];

  $edg=mysqli_fetch_array(mysqli_query($link,"select * from game where seq='".$gseq."'"));
  if($gseq>0){
?>
<form action="api.php?do=adg" method="post" enctype="multipart/form-data">
  <table class="ma bs" width="100%">
    <tr>
      <td class="tdl tr" width="30%">主旨: </td>
      <td class="tdl"><input type="text" name="title" value="<?=$edg['title']?>"></td>
    </tr>
    <tr>
      <td class="tdl tr">連結網址: </td>
      <td class="tdl"><input type="text" name="url" value="<?=$edg['url']?>"></td>
    </tr>
    <tr>
      <td class="tdl tr">截止日期: </td>
      <td class="tdl"><input type="date" name="stopday" value="<?=$edg['stopday']?>"></td>
    </tr>
    <tr>
      <td class="tdl tr">活動網址: </td>
      <td class="tdl"> <input type="text" name="web" value="<?=$edg['web']?>"></td>
    </tr>
    <tr>
      <td class="tdl tr">競賽簡章: </td>
      <td class="tdl"> <input type="file" name="file" ></td>
    </tr>
    <tr>
      <td class="ct tdl" colspan="2">
        <input type="hidden" name="hseq" value="<?=$gseq?>">
        <input type="submit" value="編輯">
        <input type="button" value="刪除" onclick="delg(<?=$gseq?>)">
        <input type="reset" value="重置">
      </td>
    </tr>      
  </table>    
</form>

<script>
  function delg(gseq){
    $.post("api.php?do=delg",{gseq},function(){
      console.log(gseq)
      location.href="main.php?do=admin&redo=game";
    })
  }
</script>


<?
  }else{
    echo "<div class='ct tdl'>請選擇</div>";
  }
?>