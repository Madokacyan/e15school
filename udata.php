<? include_once "base.php";
  $seq=$_POST['seq'];

  $edu=mysqli_fetch_array(mysqli_query($link,"select * from user where seq='".$seq."'"));
  if($seq>0){
?>
<form action="api.php?do=aduser" method="post" enctype="multipart/form-data">
  <table class="ma lh3">
    <tr>
      <td>帳號狀態: <input type="checkbox" name="act" value="<?=$edu['seq']?>" <?=($edu['act']==1)?"checked":"";?> >啟用</td>
    </tr>
    <tr>
      <td>密碼重設: <input type="text" name="pw" value="<?=$edu['pw']?>"></td>
    </tr>
    <tr>
      <td class="ct">
        <input type="hidden" name="hseq" value="<?=$seq?>">
        <input type="submit" value="編輯">
        <input type="button" value="刪除" onclick="delu(<?=$seq?>)">
        <input type="reset" value="重置">
      </td>
    </tr>      
  </table>    
</form>

<script>
  function delu(seq){
    $.post("api.php?do=delu",{seq},function(){
      console.log(seq)
      location.href="main.php?do=admin&redo=user";
    })
  }
</script>


<?
  }else{
    echo "<div class='ct'>請選擇</div>";
  }
?>