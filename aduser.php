<table class="ma bs" width="50%">
  <tr>
    <th>會員帳號管理</th>
  </tr>
  <tr>
    <td class="ct tdl">請選擇要管理的帳號:
    <select name="acc" id="acc" onchange="selu()">
      <option value="0">請選擇</option>
      <?
        $uro=mysqli_query($link,"select * from user");
        while($urow=mysqli_fetch_array($uro)){
          echo "<option value=".$urow['seq'].">".$urow['acc']."</option>";
        }
      ?>
    </select>
    </td>
  </tr>
  <tr>
    <td id="udata" class="tdl"><div class="ct">請選擇</div></td>
  </tr>
</table>

<script>
function selu(){
  let seq=$("#acc").val();
  $.post("udata.php",{seq},function(back){
    $("#udata").html(back)
  })
}
</script>