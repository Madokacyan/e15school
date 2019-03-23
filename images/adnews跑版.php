<table class="ma bs bb">
  <tr>
    <th class="ct" colspan="2">新增最新消息</th>
  </tr>
    <td class="ct tdl" width="50%">最新消息</td>
    <td class="ct tdl" width="50%">圖片消息</td>
  </tr>
  <tr>
    <td class="tdl">
      <form action="api.php?do=addnews" method="post" enctype="multipart/form-data">
        <table class="ma lh3">
          <tr>
            <td>消息標題：<input type="text" name="title" required></td>
          </tr>
          <tr>
            <td>詳細資料：<input type="file" name="file" ></td>
          </tr>
          <tr>
            <td>消息圖片：<input type="file" name="img" ></td>
          </tr>
          <tr>
            <td>消息網頁：<input type="text" name="url" value="http://"></td>
          </tr>
          <tr>
            <td>顯示NEW：<input type="checkbox" name="new" value="1" checked>是</td>
          </tr>
          <tr>
            <td>跑馬燈顯示：<input type="checkbox" name="marq" value="1" checked>是</td>
          </tr>
          <tr>
            <td class="ct"><input type="submit" value="新增"></td>
          </tr>
        </table>
      </form>

    </td>
    <td class="tdl" style="vertical-align:top;">
    <form action="api.php?do=addimg" method="post" enctype="multipart/form-data">
        <table class="ma lh3" style="padding:10px">
          <tr>
            <td>圖片位置：<input type="file" name="file" required></td>
          </tr>
          <tr>
            <td>圖片連結：<input type="text" name="url" value="http://localhost/websystem"></td>
          </tr>
          <tr>
            <td>替代文字：<input type="text" name="alt"></td>
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
<table class="ma bs bb">
  <tr>
    <th class="ct" colspan="2">最新消息管理</th>
  </tr>
  <tr>
    <td class="ct tdl" width="50%">請選擇要管理的最新消息
      <select name="news" id="news" onchange="selnews()">
        <option value="0">請選擇</option>  
        <?
          $nsql=mysqli_query($link,"select title from news");
          while($nrow=mysqli_fetch_array($nsql)){
            echo "<option value=".$nrow['nseq'].">".$nrow['title']."</option>";
          }
        ?>
      </select>
    </td>
    <td class="ct tdl" width="50%">請選擇要管理的圖片消息
      <select name="img" id="img" onchange="selimg()" width="150px">
      <option value="0">請選擇</option>
      <?
        $wimg=mysqli_query($wlink,"select title from imgnews");
        while($wirow=mysqli_fetch_array($wimg)){
          echo "<option value=".$wirow['nseq'].">".$wirow['title']."</option>";
        }
      ?>
      </select>
    </td>
  </tr>
  <tr>
    <td class="tdl" id="ndata">
      <div class="ct">請選擇</div>
    </td>
    <td class="tdl" id="idata" style="vertical-align:top">
      <div class="ct">請選擇</div>
    </td>
  </tr>
</table>
<br>

<script>
  function selnews(){
    var nseq=$("#news").val();
    $.post("#ndata.php",{nseq},function(back){
      $("#ndata").html(back)
    })
  }
  function selimg(){
    var iseq=$("#img").val()
    $.post("#idata.php",{iseq},function(back){
      $("#idata").html(back)
    })
  }
</script>