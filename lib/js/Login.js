$(document).on('submit', '#LoginForm', function(event) {
    event.preventDefault();
    var usern = $('#username').val();
    var userp = $('#psw').val();
    $.ajax({
          url: 'userLogin.php',
          type: 'post',
          dataType: 'json',
          data: {
            usern:usern,
            userp:userp
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