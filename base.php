<?
  $link=mysqli_connect("localhost","admin","","e15school");
  mysqli_query($link,"SET NAMES UTF8");
  session_start();

  function anscode($num){
    $ans="";
    for($i=0;$i<$num;$i++){
      $a=rand(1,3);
      switch($a){
        case 1:
          $c=chr(rand(48,57));
        break;
        case 2:
          $c=chr(rand(65,90));
        break;
        case 3:
          $c=chr(rand(97,122));
        break;      
      }
      $ans=$ans.$c;
    }
    $_SESSION['ans']=$ans;

    $im=imagecreate(40,26);
    $bg=imagecolorallocate($im,255,255,255);
    $wcolor=imagecolorallocate($im,0,0,0);
    $strx=3;
    for($i=0;$i<strlen($ans);$i++){
      imagestring($im,5,$strx,rand(0,10),substr($ans,$i,1),$wcolor);
      $strx=3+($i+1)*9;
    }

    imagepng($im,"images/code.png");
    imagedestroy($im);
  }
?>