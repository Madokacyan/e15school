<table class="ma bs" width="90%">
<tr>
  <th class="ct" colspan="2">新增最新消息</th>
</tr>
<tr>
  <td class="ct tdl" width="50%">最新消息</td>
  <td class="ct tdl" width="50%">圖片消息</td>
</tr>
<tr>
  <td class="tdl lh3">
    <form action="api.php?do=addnews" method="post" enctype="multipart/form-data">
      <table class="ma">
        <tr>
          <td>消息標題: <input type="text" name="title" required></td>
        </tr>
        <tr>
          <td>詳細資料: <input type="file" name="file" id="file"></td>
        </tr>
        <tr>
          <td>消息圖片: <input type="file" name="img" ></td>
        </tr>
        <tr>
          <td>消息網頁: <input type="text" name="url" value="http://"></td>
        </tr>
        <tr>
          <td>顯示NEW: <input type="checkbox" name="new" value="1" checked>是</td>
        </tr>
        <tr>
          <td>跑馬燈顯示: <input type="checkbox" name="marq" value="1" checked>是</td>
        </tr>
        <tr>
          <td class="ct"><input type="submit" value="新增"></td>
        </tr>      
      </table>    
    </form>
  </td>
  <td class="tdl lh3"  style="vertical-align:top">
    <form action="api.php?do=addimg" method="post" enctype="multipart/form-data">
      <table class="ma">
        <tr>
          <td>圖片位置: <input type="file" name="file" id="file" required></td>
        </tr>
        <tr>
          <td>圖片連結: <input type="text" name="url"></td>
        </tr>
        <tr>
          <td>替代文字: <input type="text" name="alt"></td>
        </tr>
        <tr>
          <td class="ct"><input type="submit" value="新增"></td>
        </tr>      
      </table>    
    </form> 
  </td>
</tr>
</table>
<br><hr><br>
<table class="ma bs" width="90%">
  <tr>
    <th class="ct" colspan="2">最新消息管理</th>
  </tr>
  <tr>
    <td class="ct tdl" width="50%">請選擇要管理的最新消息
      <select name="news" id="news" onchange="seln()" style="width:100px">
        <option value="0">請選擇</option>
        <?
          $nsql=mysqli_query($link,"select * from news");
          while($nrow=mysqli_fetch_array($nsql)){
            echo "<option value='".$nrow['nseq']."'>".$nrow['title']."</option>";
          }
        ?>
      </select>
    </td>
    <td class="ct tdl" width="50%">請選擇要管理的圖片消息
    <select name="img" id="img" onchange="selimg()" style="width:100px">
        <option value="0">請選擇</option>
        <?
          $isql=mysqli_query($link,"select * from imgnews");
          while($irow=mysqli_fetch_array($isql)){
            echo "<option value='".$irow['seq']."'>".$irow['alt']."</option>";
          }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td class="tdl" id="ndata"><div class="ct">請選擇</div></td>
    <td class="tdl" id="idata" style="vertical-align:top"><div class="ct">請選擇</div></td>
  </tr>
</table>

<br>
<script>
function seln(){
  var newseq=$("#news").val();
  $.post("ndata.php",{newseq},function(back){
    $("#ndata").html(back)
  })
}
function selimg(){
  var iseq=$("#img").val();
  console.log(iseq);
  $.post("idata.php",{iseq},function(back){
    $("#idata").html(back)
  })
}
</script>