$("#frm-login").submit(function (e) { 
  e.preventDefault();
  
  let login = $('#login').val();
  let passwd = $('#passwd').val();
  let url = window.location.href;  

  $.ajax({
    type: "POST",
    data: {login,passwd},
    url: "login.php",
    success: function (response) {
      if(response == 1) {
        window.location.replace("upload-page.php");
      } else {
        alert('Acesso negado');
      }
    },
    error: function () { 
      alert('Erro ao logar no sistema');
     }
  });
});