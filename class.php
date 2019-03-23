<div id="left">
  <div class="ma ct bb ltop">=課程規劃=</div>
  <br>
  <?
    $cro=mysqli_query($link,"select * from class");
    while($crow=mysqli_fetch_array($cro)){
  ?> 
  <a href="?do=class&type=<?=$crow['seq']?>"><div class="ma ct lnav"><?=$crow['title']?></div></a>
  <?
    }
  ?>
</div>


<?
  $type=(!empty($_GET['type']))?$_GET['type']:"1";
  $ccon=mysqli_fetch_array(mysqli_query($link,"select * from class where seq='$type'"));
?>
<div id="con" style="width:80%">
  <?=$ccon['title']?>->
  <hr><br>
  <?=nl2br($ccon['con'])?>
</div>