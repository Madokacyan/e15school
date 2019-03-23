<table class="ma bs" width="50%">
  <tr>
    <th>留言版管理</th>
  </tr>
  <tr>
    <td class="ct tdl">請選擇要管理的留言標題:
    <select name="book" id="book" onchange="selb()">
      <?
        $bro=mysqli_query($link,"select * from book where fb=0");
        while($brow=mysqli_fetch_array($bro)){
          echo "<option value=".$brow['seq'].">".$brow['title']."</option>";
        }
      ?>
    </select>
    </td>
  </tr>
  <tr>
    <td id="bdata" class="tdl"></td>
  </tr>
</table>

<script>
function selb(){
  let bseq=$("#book").val();
  $("#bdata").load("bdata.php",{bseq})
}
selb();
</script>