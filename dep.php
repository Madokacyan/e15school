<div id="left">
  <div class="ma ct bb ltop">=系所介紹=</div>
  <br>
  <?
    $dro=mysqli_query($link,"select * from dep");
    while($drow=mysqli_fetch_array($dro)){
  ?> 
  <a href="?do=dep&type=<?=$drow['seq']?>"><div class="ma ct lnav"><?=$drow['title']?></div></a>
  <?
    }
  ?>
</div>


<?
$type=(!empty($_GET['type']))?$_GET['type']:"1";
$drow=mysqli_fetch_array(mysqli_query($link,"select * from dep WHERE seq='$type'"));
?> 
<div id="con" style="width:80%">
  <?=$drow['title']?>->
  <hr><br>
  <?=nl2br($drow['con'])?>
</div>
