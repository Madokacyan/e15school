<table class="ma bs ct lh3" width="50%">
<tr> <th>新增課程項目</th></tr>
  <tr>
    <td class="tdl">
      <form action="api.php?do=cadd" method="post">
        項目名稱: <input type="text" name="title" style="width:235px"><br>
        課程內容: <textarea name="con" cols="30" rows="10"></textarea>
        <div class="ct"><input type="submit" value="新增"></div>
      </form>
    </td>
  </tr>
</table>

<br><hr><br>
<table class="ma ct bs" width="50%">
<tr> <th>課程項目管理</th></tr>
  <tr>
    <td class="tdl">
        請選擇要管理的課程項目:
        <select name="class" id="class" onchange="selc()">
      <?
        $cro=mysqli_query($link,"select * FROM class");
        while($crow=mysqli_fetch_array($cro)){
      ?>
          <option value="<?=$crow['seq']?>"><?=$crow['title']?></option>
      <?
      }
      ?>
        </select>
    </td>
    </tr>
    <tr>
      <td id="cdata" class="tdl lh3"></td>
  </tr>
</table>

<script>
function selc(){
  let cseq=$("#class").val()
    $("#cdata").load("cdata.php",{cseq})
  }
  selc();
</script>
