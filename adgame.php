<form action="api.php?do=addg" method="post" enctype="multipart/form-data">
  <table class="ma bs"  width="50%">
    <tr>
      <th class="ct" colspan="2">新增競賽資訊</th>
    </tr>
    <tr>
      <td class="tdl tr" width="30%">主旨: </td>
      <td class="tdl"><input type="text" name="title" required></td>
    </tr>
    <tr>
      <td class="tdl tr">連結網址: </td>
      <td class="tdl"><input type="text" name="url" value="http://"></td>
    </tr>
    <tr>
      <td class="tdl tr">截止日期: </td>
      <td class="tdl"><input type="date" name="stopday" ></td>
    </tr>
    <tr>
      <td class="tdl tr">活動網址: </td>
      <td class="tdl"><input type="text" name="web" value="http://"></td>
    </tr>
    <tr>
      <td class="tdl tr">競賽簡章: </td>
      <td class="tdl"><input type="file" name="file" ></td>
    </tr>
    <tr>
      <td class="tdl ct"  colspan="2"><input type="submit" value="新增"></td>
    </tr>      
  </table>    
</form>


<br><hr width="66%"><br>
<table class="ma bs" width="50%">
  <tr>
    <th class="ct">競賽資訊管理</th>
  </tr>
  <tr>
    <td class="ct tdl">請選擇要管理的競賽資訊：
      <select name="game" id="game" onchange="selgame()" style="width:100px">
        <option value="0">請選擇</option>
        <?
          $gsql=mysqli_query($link,"select * from game");
          while($grow=mysqli_fetch_array($gsql)){
            echo "<option value='".$grow['seq']."'>".$grow['title']."</option>";
          }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td id="gdata" class="tdl"><div class="ct">請選擇</div></td>
  </tr>
</table>

<br>
<script>
function selgame(){
  var gseq=$("#game").val();
  $.post("gdata.php",{gseq},function(back){
    $("#gdata").html(back)
    $("#gdata").removeClass("tdl")
    $("#gdata").css("padding","0")
  })
}

</script>