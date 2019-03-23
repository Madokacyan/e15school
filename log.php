<fieldset class="ma ct lh3">
  <legend class="bb"> 會員登入後台 </legend>
  帳號: <input type="text" id="acc" class="line" required><br>
  密碼: <input type="password" id="pw" class="line" required><br>
  <? anscode(4) ?>
  驗證碼<img src="images/code.png" alt="code">: <input type="text" id="ans" class="line"><br>
  <input type="button" value=" 登入 " onclick="log()">
</fieldset>

<script>
function log(){
  let acc=$("#acc").val()
      pw=$("#pw").val()
      ans=$("#ans").val()
  $.post("api.php?do=ans",{ans},function(back){
    if(back==1){
      $.post("api.php?do=log",{acc,pw},function(back){
        if(back==1){
          alert("登入成功")
          location.href="main.php";
        }else if(back==2){
          alert("帳號未啟用")
        }else{
          alert("帳號或密碼錯誤");
        }
      })
    }else{
      alert("驗證碼錯誤");
    }
  })
}
</script>