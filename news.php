<div id="left">
  
  <div class="ma ct bb ltop">
  =最新消息=
  </div>
  <br>
  <a href="?"><div class="ma ct lnav">系所公告</div></a>
  <a href="?type=game"><div class="ma ct lnav">競賽資訊</div></a>
</div>
<?
  if(empty($_GET['type'])){
?>
<div id="con">
  系所公告->
  <hr>
  <marquee>
  <?  
    $mro=mysqli_query($link,"select * from news where marq=1");
    while($mrow=mysqli_fetch_array($mro)){
      echo "[公告]: ";
      if($mrow['new']==1){
        echo "<button style='color:red'>new</button> ";
      }
      echo $mrow['title']."<a href='".$mrow['url']."' target='_blank' rel='noopener noreferrer'>《公告網頁》</a> | ";
    }
  ?>
  </marquee>
  <hr>
  <br>
  <?
    $nro=mysqli_query($link,"select * from news ORDER BY nseq desc");
    while($nrow=mysqli_fetch_array($nro)){
      if($nrow['new']==1){
        echo "<button style='color:red'>new</button> ";
      }
      echo $nrow['time']."<br>";
      
      if($nrow['img']!=''){
        echo "<img src='images/".$nrow['img']."' width='130px'>&emsp;";
      }

      echo "<b>".$nrow['title'].'</b>&emsp;';
      echo "<a href='".$nrow['url']."' target='_blank' rel='noopener noreferrer'>《公告網頁》</a>";

      if($nrow['file']!=''){
        echo "<a href='images/".$nrow['file']."' target='_blank' rel='noopener noreferrer'>《詳細資料》</a>";
      }
      echo "<hr style='border:0; border-bottom:1px dashed darkcyan'>";
    } 
  ?>
</div>
<div id="right" class="ct">
  <?
    $iro=mysqli_query($link,"select * from imgnews order by seq desc");
    while($irow=mysqli_fetch_array($iro)){
      echo "<a href='".$irow['url']."' target='_blank' rel='noopener noreferrer'><img src='images/".$irow['file']."' style='width:130px; box-shadow:7px 7px 5px #666' title=".$irow['alt']."></a><br>";
      echo "<hr style='border:0; border-bottom:1px solid darkcyan; width:77%'>";
    }
  ?>
  </div>
<?
  }else{
?>
<div id="con" style="width:80%">
  競賽資訊->
  <hr><br>
  
  <div style="width:100%;">
    <b>
      <div class="th ct" style="float:left; width:20%">發布日期</div>
      <div class="th" style="float:left; width:60%">&emsp; 主旨</div>
      <div class="th ct" style="float:left; width:20%">截止日期</div>
    </b>
    
      <?
        $gro=mysqli_query($link,"select * from game order by seq desc");
        while($grow=mysqli_fetch_array($gro)){
      ?>
      <div class="tdl ct" style="float:left; width:20%;"><?=$grow['gday']?></div>
      <div class="tdl" style="float:left; width:60%;">&emsp;
        <a href="<?=$grow['url']?>" target='_blank' rel='noopener noreferrer'><?=$grow['title']?></a>&emsp;
        <a href="<?=$grow['web']?>" target='_blank' rel='noopener noreferrer'>《活動網站》</a>&emsp;
        <a href="images/<?=$grow['file']?>" target='_blank' rel='noopener noreferrer'>《競賽簡章》</a>
      </div>
      <div class="tdl ct" style="float:left; width:20%;"><?=$grow['stopday']?></div>
    <?
      
    }
    ?>
    
  </div>
</div>
<?
  }
?>
