<?
if(!empty($_POST['acc'])){
  if(($_POST['acc']='admin') && ($_POST['pw']='1234')){
    $_SESSION['login']=$_POST['acc'];
    echo "<script>alert('後台登入成功!'); location.href='main.php?do=admin&redo=ok'</script>";
  }else{
    echo "<script>alert('帳號或密碼錯誤!');</script>";
  }
}



if(empty($_SESSION['login'])){
?>
<form action="" method="post">
<fieldset class="ma ct lh3">
  <legend class="bb"> 後台 管理 登入 </legend>
  帳號: <input type="text" name="acc" id="acc" class="line"><br>
  密碼: <input type="password" name="pw" id="pw" class="line"><br>
  <input type="submit" value=" 登入後台 ">
</fieldset>
</form>
<?
  }else{
?>
<div id="left" class="ma ct admu">
  工作選單
  <div class="list">
    <a href="?do=admin&redo=news">最新消息管理</a>
    <a href="?do=admin&redo=game">競賽資訊管理</a>
    <a href="?do=admin&redo=user">會員帳號管理</a>
    <a href="?do=admin&redo=book">留言版管理</a>
    <a href="?do=admin&redo=class">課程規劃管理</a>
    <a href="?do=admin&redo=dep">系所介紹管理</a>
    <a href="#" onclick="logout()">後台登出</a>
  </div>
</div>


<div id="con" style="width:80%">
<?    
    $redo=(!empty($_GET['redo']))?$_GET['redo']:'';
    switch($redo){
      case "news": include "adnews.php"; break;
      case "game": include "adgame.php"; break;
      case "user": include "aduser.php"; break;
      case "book": include "adbook.php"; break;
      case "class": include "cad.php"; break;
      case "dep": include "dad.php"; break;
      case "out": 
        unset($_SESSION['login']);
        header("location:main.php");
      break;
      default: echo "<-請選擇管理項目"; break;
    }

?>
</div>

<script>
function logout(){
  var chk=confirm('確定要登出嗎?');
  if(chk==true){
    location.href="main.php?do=admin&redo=out"
  }
}
</script>

<? } //elseEND ?>