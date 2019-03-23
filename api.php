<? include_once("base.php");
switch ($_GET['do']) {

//驗碼來自 base.php 的anscode($num)產生的 $_SESSION['ans']=$ans
  case "ans":
    if($_SESSION['ans']==$_POST['ans']){
      echo 1;
    }
  break;
//登入
  case "log":
    $acc=$_POST['acc'];
    $pw=$_POST['pw']; 
    $chk=mysqli_fetch_array(mysqli_query($link,"select * from user where acc='$acc' && pw='$pw'"));
    if($chk){
      if($chk['act']==1){
        $_SESSION['user']=$acc;
        echo 1;
      }else{
        echo 2;
      }
    }
  break;
//新增
  case "reg":
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $mail=$_POST['mail'];
    $uro=mysqli_query($link,"insert into user values(null,'$acc','$pw','$mail','0')");
  break;

  case 'addnews':
    $title=$_POST['title'];
    $url=$_POST['url'];
    if(!empty($_FILES['file']['tmp_name'])){
      $nfile=$_FILES['file']['name'];
      copy($_FILES['file']['tmp_name'],"images/".$nfile);
      unlink($_FILES['file']['tmp_name']);
    }else{
      $nfile="";
    }
    if(!empty($_FILES['img']['tmp_name'])){
      $ifile=$_FILES['img']['name'];
      copy($_FILES['img']['tmp_name'],"images/".$ifile);
      unlink($_FILES['img']['tmp_name']);
    }else{
      $ifile="";
    }
    if(!empty($_POST['new'])){
      $new=1;
    }else{
      $new=0;
    }
    if(!empty($_POST['marq'])){
      $marq=1;
    }else{
      $marq=0;
    }
    $nadd=mysqli_query($link,"INSERT INTO `news`(`title`, `url`, `file`, `img`, `new`, `marq`) VALUES('$title','$url','$nfile','$ifile','$new','$marq')");
    header("location:main.php?do=admin&redo=news");
    break;

  case "addimg":
    if(!empty($_FILES['file']['tmp_name'])){
      $fimg=$_FILES['file']['name'];
      copy($_FILES['file']['tmp_name'],"images/".$fimg);
      unlink($_FILES['file']['tmp_name']);
    }
    $url=$_POST['url'];
    $alt=$_POST['alt'];
    $iadd=mysqli_query($link,"insert into imgnews values(null,'$fimg','$url',' $alt')");
    header("location:main.php?do=admin&redo=news");
  break;
  case "addg":
  $title=$_POST['title'];
  $url=$_POST['url'];
  if(!empty($_FILES['file']['tmp_name'])){
    $file=$_FILES['file']['name'];
    copy($_FILES['file']['tmp_name'],"images/".$file);
    unlink($_FILES['file']['tmp_name']);
  }
  $web=$_POST['web'];
  $gday=date("Y-m-d");
  $stopday=$_POST['stopday'];
  $gadd=mysqli_query($link,"insert into game values(null,'$title','$url','$file','$web','$gday','$stopday')");
  header("location:main.php?do=admin&redo=game");
  break;
  case 'addb':
    $user=$_SESSION['user'];
    $title=$_POST['title'];
    $con=$_POST['bcon'];
    $addb=mysqli_query($link,"insert into book(`user`,`title`,`con`) values('$user','$title','$con')");
    header("location:main.php?do=book");
  break;
  case 'fb':
    $fbseq=$_POST['fhseq'];
    $user=$_POST['user'];
    $con=$_POST['fbcon'];
    $fb=mysqli_query($link,"insert into book(`user`,`con`,`fb`) values('$user','$con','$fbseq')");
    header("location:main.php?do=admin&redo=book");
  break;
  case "cadd":
    $title=$_POST['title'];
    $con=$_POST['con'];
    mysqli_query($link,"insert into class(`title`,`con`) values('$title','$con')");
    header("location:main.php?do=admin&redo=class");
  break;
  
//編輯
  case 'adnews':
    $nseq=$_POST['hseq'];
    $title=$_POST['title'];
    $url=$_POST['url'];
    if(!empty($_FILES['file']['tmp_name'])){
      $file=$_FILES['file']['name'];
      copy($_FILES['file']['tmp_name'],"images/".$file);
      unlink($_FILES['file']['tmp_name']);
    }
    if(!empty($_FILES['img']['tmp_name'])){
      $nimg=$_FILES['img']['name'];
      copy($_FILES['img']['tmp_name'],"images/".$nimg);
      unlink($_FILES['img']['tmp_name']);
    }
    if(!empty($_POST['new'])){
      $new=1;
    }else{
      $new=0;
    }
    if(!empty($_POST['marq'])){
      $marq=1;
    }else{
      $marq=0;
    }
    
    $upnews="update news set title='$title',url='$url',new='$new',marq='$marq'";
    if(isset($file)){
      $upnews=$upnews.",file='$file'";
    }
    if(isset($nimg)){
      $upnews=$upnews.",img='$nimg'";
    }
    $upnews=$upnews." WHERE nseq='$nseq'";
    mysqli_query($link,$upnews);
    header("location:main.php?do=admin&redo=news");
  break;

  case "adimg":
    $seq=$_POST['hseq'];
    $url=$_POST['url'];
    $alt=$_POST['alt'];
    $upimg="update imgnews set url='$url',alt='$alt' ";
    if(!empty($_FILES['file']['tmp_name'])){
      $imgf=$_FILES['file']['name'];
      copy($_FILES['file']['tmp_name'],"images/".$imgf);
      unlink($_FILES['file']['tmp_name']);
    }
    if(isset($imgf)){
      $upimg=$upimg.",file='$imgf'";
    }
    mysqli_query($link,$upimg." where seq='$seq' ");
    header("location:main.php?do=admin&redo=news");
  break;
  
  case 'aduser':
    $seq=$_POST['hseq'];
    if(!empty($_POST['act'])){
      $act=1;
    }else{ 
      $act=0;
    }
    $edu="update user set act='$act'";
    if(!empty($_POST['pw'])){
      $pw=$_POST['pw'];
      $edu=$edu.",pw='$pw'";
    }
    $edu=mysqli_query($link,$edu." where seq='$seq'");
    header("location:main.php?do=admin&redo=user");
  break;
  case "adg":
    $seq=$_POST['hseq'];
    $title=$_POST['title'];
    $url=$_POST['url'];
    $stday=$_POST['stopday'];
    $web=$_POST['web'];

    $upg="update game set title='$title',url='$url',stopday='$stday',web='$web'";

    if(!empty($_FILES['file']['tmp_name'])){
      $file=$_FILES['file']['name'];
      copy($_FILES['file']['tmp_name'],"images/".$file);
      unlink($_FILES['file']['tmp_name']);
    }
    if(isset($file)){
      $upg=$upg.",file='$file'";
    }
    $upg=mysqli_query($link,$upg." WHERE seq='$seq'");
    header("location:main.php?do=admin&redo=game");
  break;
  case 'adbook':
    $seq=$_POST['hseq'];
    $title=$_POST['title'];
    $con=$_POST['bcon'];
    if(!empty($_POST['sh'])){
      $sh=1;
    }else{
      $sh=0;
    }
    $upbook=mysqli_query($link,"update book set title='$title',con='$con',sh='$sh' where seq='$seq'");
    header("location:main.php?do=admin&redo=book");    
  break;
  case 'edb': /*會員編修同上管理者編輯case 'adbook' */
    $seq=$_POST['edhseq'];
    $title=$_POST['title'];
    $con=$_POST['bcon'];
    $edb=mysqli_query($link,"update book set title='$title',con='$con' where seq='$seq'");
    header("location:main.php?do=book");
  break;
  case "dep":
    foreach ($_POST as $seq => $con) {
      $upd=mysqli_query($link,"update dep set con='$con' where seq='$seq'");
    }
    header("location:main.php?do=admin&redo=dep");
  break;
  case "class":
    $seq=$_POST['hseq'];
    $title=$_POST['title'];
    $con=$_POST['con'];
    $upc=mysqli_query($link,"update class set title='$title', con='$con' where seq='$seq'");
    header("location:main.php?do=admin&redo=class");
  break;

//刪除
  case 'deln':
    $nseq=$_POST['nseq'];
    mysqli_query($link,"delete from news where nseq='".$nseq."'");
  break;
  case 'delimg':
    $seq=$_POST['iseq'];
    mysqli_query($link,"delete from imgnews where seq='".$seq."'");
  break;
  case 'delg':
    $seq=$_POST['gseq'];
    mysqli_query($link,"delete from game where seq='".$seq."'");
  break;    
  case 'delu':
    $seq=$_POST['seq'];
    mysqli_query($link,"delete from user where seq='".$seq."'");
  break;
  case 'delb':
    $seq=$_POST['seq'];
    mysqli_query($link,"delete from book where seq='$seq'");
  break; 

  case 'delc':
    $seq=$_POST['seq'];
    mysqli_query($link,"delete from class where seq='$seq'");
  break; 



}
?>