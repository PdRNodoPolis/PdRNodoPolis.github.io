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
        contentType: 'application/x-www-form-urlencoded',
        success: function(res) {
            console.log(res)
        },
        error: function(res) {
            console.log(res)
        }
    });
});


$('.card').click(function() {
    var polis = $(this).attr('data-open');
    var c = $(this).attr('class');
    ga('send', 'event', 'Polis', 'Open', polis);
    console.log('c: ' + c)
    console.log('GA: ' + polis);
})

$('.report-icon').click(function() {
    var report = $(this).attr('href');
    ga('send', 'event', 'Polis', 'Report', report);
    console.log('GA: ' + report);
})

//probando
$('.card').hover(function() {
    $(this).find('.report').css('color', '#0a0a0a');;
}, function() {
});

$('.report').click(function() {
    var win = window.open('/data-exports/03102017/ReportePolis-pdr-elecciones-2017-03102017.html', '_blank');
    if (win) {
        //Browser has allowed it to be opened
        win.focus();
    } else {
        //Browser has blocked it
        alert('Please allow popups for this website');
    }

})

$('.report').hover(function() {
    $(this).css('color', '#0a0a0a');
}, function() {});