$("#formUp").submit(function (e) { 
  e.preventDefault();

  let form = $("#formUp").serialize();

  $.post("upload-file.php", form, function (response) {
      const [answer,msg] = response.split(':');

      if (answer == 1) {
        alert(msg);
        $("#formUp").trigger('reset');
      } else {
        alert(msg);
      }
    },
    "text"
  );
});