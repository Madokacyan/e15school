<div class="tr"><button onclick="location.href='?do=book'">留言列表</button>
<?
  if(!empty($_SESSION['user'])){
?>
   | <button onclick="addb()">新增留言</button> 
<?
  }
?>
</div>
<script>
function addb() {
  $("#con").load("addb.php")
}
</script>

<hr style="border:1px solid #6dd0cd">

<div id="con" style="width:100%">
<div class="ct bb" style="color:#6dd0cd"> 留 言 列 表 </div>

<br>
<?
$bsql=mysqli_query($link,"select * from book where sh=0 && fb=0 order by seq desc");
while($brow=mysqli_fetch_array($bsql)){
?>
<fieldset class="ma book">
  <legend>留言標題:&emsp;<b><?=$brow['title']?></b>&emsp;</legend>
    <table style="width:100%;border-color:#6dd0cd;" rules=all>
      <tr>
        <td style="width:20%;border:1px; vertical-align:top" >
          留言人:<?=$brow['user']?><br>
          留言時間:<?=$brow['time']?><br><br>
          <?
            if(!empty($_SESSION['user'])){
              $bseq=$brow['seq'];
          ?>   
            <button onclick="edb(<?=$bseq?>)">刪修留言</button>
          <?
            }
          ?>
          <script>
            function edb(bseq) {
              $.post("edb.php",{bseq},function(back){
                console.log(bseq)
                $("#con").html(back)
              })
            }
          </script>
        </td>
        <td class="tdl"><?=nl2br($brow['con'])?></td>
      </tr>
      <tr>
       <td colspan="2">
        <b>此留言的回覆:</b>
        <?
          $fsql=mysqli_query($link,"select * from book where fb='".$brow['seq']."' order by seq desc");
          while($frow=mysqli_fetch_array($fsql)){
        ?>
          <br><br>
          <?=$frow['user']?>於<?=$frow['time']?>回覆:</b><br>
          <?=nl2br($frow['con'])?>
          <hr style="border:0;border-bottom:5px dotted #6dd0cd">
        <?}?>
      </td>
    </tr>
  </table>
</fieldset>

<br>
<?}?>
</div>