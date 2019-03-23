<fieldset class="ma ct lh3">
  <legend class="bb">會員註冊</legend>
  帳號: <input type="text" id="acc" class="line"><br>
  密碼: <input type="password" id="pw" class="line"><br>
  信箱: <input type="text" id="mail" class="line"><br>
  <? anscode(4) ?>
  驗證碼<img src="images/code.png" alt="code">: <input type="text" id="ans" class="line"><br>
  <input type="button" value=" 註冊 " onclick="reg()">
</fieldset>

<script>
function reg(){
  let acc=$("#acc").val()
      pw=$("#pw").val()
      mail=$("#mail").val()
      ans=$("#ans").val()
  
  chk=0;
  if(acc==""){
    alert('帳號不可空白')
    chk++
  }
  if(pw==""){
    alert('密碼不可空白')
    chk++
  }
  if(mail==""){
    alert('信箱不可空白')
    chk++
  }

  if(chk==0){
    $.post("api.php?do=ans",{ans},function(back){
      if(back==1){
        $.post("api.php?do=reg",{acc,pw,mail},function(){
          alert('註冊完成')
          location.href="main.php?do=log"
        })
      }else{
        alert('驗證碼錯誤')
      }
    })
  }  
}

</script>