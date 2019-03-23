<table class="ma bs ct"  width="50%">
  <tr> <th class="bb">系所介紹管理</th></tr>
  <tr>
    <td class="tdl">
      <form action="api.php?do=dep" method="post">
      <?
      $dro=mysqli_query($link,"select * from dep");
      while($drow=mysqli_fetch_array( $dro)){
        echo "<div class='ct bb'><label for='".$drow['seq']."'>".$drow['title']."</label></div>";
      ?> 
        <textarea name="<?=$drow['seq']?>" cols="30" rows="10"><?=$drow['con']?></textarea>
        <br><hr>
      <?
      }
      ?>
      <input type="submit" value="確認送出">
      <input type="reset" value="重置">
      </form>
    </td>
  </tr>
</table>

