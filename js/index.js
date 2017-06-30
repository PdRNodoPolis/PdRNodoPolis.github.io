$(document).foundation();

var sendProposal = function() {
    var sendingMessage = true;
    var name = $('#form-name').val();
    var email = $('#form-email').val();
    var msg = $('#form-msg').val();
    var date = new Date().getDate();
    var month = new Date().getMonth();
    var year = new Date().getFullYear();
    var now = date + '/' + month + '/' + year;
    var data = {
        subject: name + ' - ' + email,
        body: now + ' - ' + msg,
    };
    console.log(data);


    $.ajax({
        type: "POST",
        beforeSend: function(request) {
            request.setRequestHeader("Access-Control-Allow-Origin", '*');
        },
        url: "/mailer/email.php",
        data: data,
        success: function() {
            alert('Mensaje enviado correctamente.')
        }
    });
}
