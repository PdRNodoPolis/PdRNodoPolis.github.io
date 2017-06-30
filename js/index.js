$(document).foundation();

var sendProposal = function() {
    var sendingMessage = true;
    var name = $('#issue-name').val();
    var email = $('#issue-email').val();
    var msg = $('#issue-msg').val();
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
    url: "/mailer/email.php",
    data: data,
    success: function(){
        alert('Mensaje enviado correctamente.')
    }
});
}
