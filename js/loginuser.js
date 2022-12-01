$(document).on('submit', '#UserLoginForm', function(event) {
    event.preventDefault();
    var un = $('#UserUsername').val();
    var pw = $('#UserPassword').val();
    $.ajax({
          url: 'Login.php',
          type: 'post',
          dataType: 'json',
          data: {
            un:un,
            pw:pw
          },
          success: function (data) {
            // console.log(data);
            if(data.valid == true){
              window.location = data.url;
            }else{
              alert('Invalid Username / Password!');
            }
          },
          error: function(){
            alert('Error: Login');
          }
        });//end a req
  });