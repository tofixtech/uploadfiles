$("#frm-login").submit(function (e) { 
  e.preventDefault();
  
  let form = $("#frm-login").serialize();
  let url = window.location.href;

  $.post("login.php",form,function (response) {
      if (response == "1") {
        window.location.replace(url+"upload-page.php");
      } else {
        alert("Acesso negado!");
      }
    },
    "text"
  );
});