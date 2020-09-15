

$(function() {
    $('#contact-us-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
      
        var fields = form.serialize();
        console.log(fields);
        $.ajax({
            type: 'POST',
            url: 'contact-us.php',
            data: form.serialize(),
            success: function(msg) {
                $('#contact-us-success-modal').modal({ show: true });
            },
            error: function() {
                $('#contact-us-success-modal').modal({ show: true });
            }
        });
    });
});