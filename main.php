<? include_once "base.php";
  if(empty($_SESSION['now'])){
    $chkday=mysqli_fetch_array(mysqli_query($link,"SELECT count(day) FROM countm WHERE day='".date("Y-m-d")."'"))[0];
    if($chkday>0){
      $sqlmen=mysqli_query($link,"UPDATE countm SET men=men+1 WHERE day='".date("Y-m-d")."'");
      $_SESSION['now']=mysqli_fetch_array(mysqli_query($link,"SELECT men FROM countm WHERE day='".date("Y-m-d")."'"))[0];
    }else{
      $_SESSION['now']=1;
      $sqlto=mysqli_query($link,"INSERT INTO countm VALUES ('".date("Y-m-d")."',1)");
    }
  }
  $all=mysqli_fetch_array(mysqli_query($link,"SELECT sum(men) FROM countm"))[0];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>網頁資訊管理系統</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="js/main.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div id="top">
  <?
    if(empty($_SESSION['login']) && empty($_SESSION['user'])){
      echo "未登入";
    }else{
      if(!empty($_SESSION['login'])){
        echo "管理者: ".$_SESSION['login'];
      }
      if(!empty($_SESSION['user'])){
        echo " 帳號: ".$_SESSION['user'];
      }
    }
  ?>
 | 當日瀏覽: <?=$_SESSION['now']?> | 瀏覽總人數: <?=$all?> 
  </div>
  <div id="wrap">
    <header></header>
    <nav>
      <div class="mu"><a href="?do=news">最新消息</a></div>
      <div class="mu"><a href="?do=dep">系所介紹</a></div>
      <div class="mu"><a href="?do=class">課程規劃</a></div>
      <?
        if(empty($_SESSION['user'])){
      ?> 
      <div class="mu">
        <a href="#">會員中心&#9660;</a>   
        <div class="sub">
          <a href="?do=log">會員登入</a>
          <a href="?do=reg">會員註冊</a>
        </div>
      </div>
        <?
          }else{
        ?>
        <div class="mu"><a href="?do=out">會員登出</a></div>
        <? 
          }
        ?>
      <div class="mu"><a href="?do=book">留言版</a></div>
      <div class="mu"><a href="?do=admin">管理中心</a></div>
    </nav>
    <div id="main">
      <?
        $do=(!empty($_GET['do']))?$_GET['do']:"news";
        switch ($do) {
          case 'news':
            include "news.php";
          break;
          case 'dep':
            include "dep.php";
          break;
          case 'class':
            include "class.php";
          break;
          case 'log':
            include "log.php";
          break;
          case 'reg':
            include "reg.php";
          break;
          case 'book':
            include "book.php";
          break;
          case 'admin':
            include "admin.php";
          break;                
          case 'out':
            unset($_SESSION['user']);
            echo "<script>alert('會員登出成功!'); location.href='main.php';</script>";
          break;
        }
      ?>
    </div>
    <footer>Copyright 2018 Hareion&emsp;更新日期:<?=date("Y-m-d")?></footer>
  </div>
</body>
</html>