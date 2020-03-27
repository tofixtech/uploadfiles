$("#formUp").submit(async function (e) { 
  e.preventDefault();

  $('#spnSend').html('<i class="fas fa-sync fa-spin"></i>Enviando...');

  $('#btnSub').prop('enabled',false);

  let form = $("#formUp")[0];
  
  let data = new FormData(form);

  await
  $.ajax({
		type: "POST",
		enctype: 'multipart/form-data',
		url: 'upload-file.php',
		data: data,
		processData: false,
		contentType: false,
		cache: false,
		success: function (e){
      const [code,msg] = e.split(':');
      alert(msg);
      if(code == 1) {
        $('#formUp').trigger('reset');
      }
		},
		error: function(e) {
      alert('Erro ao tentar enviar o arquivo!');
		}
  });
  
  $('#spnSend').html('Enviar');
  $('#btnSub').prop('enabled',true);
});