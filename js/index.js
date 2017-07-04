$(document).foundation();

$('#submit-proposal').click(function() {
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
        url: "/mailer/email.php",
        data: data,
        success: function(res) {
            console.log(res)
        },
        error: function(res) {
            console.log(res)
        },
        contentType: 'application/x-www-form-urlencoded'
    });
});


$('.card').click(function() {
    var polis = $(this).attr('data-open');
    ga('send', 'event', 'Polis', 'Open', polis);
})

$('.report-icon').click(function() {
    var report = $(this).attr('href');
    ga('send', 'event', 'Report', 'Open', report);
})