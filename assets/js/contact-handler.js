/*eslint-disable*/
$(document).ready(function() {
    $('#contact').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
        type: 'post',
        url: 'contactus.php',
        data: $('#contact').serialize(),
        success: function(result) {
            showConfirmation(result);
            var timerContact = setTimeout(function() {
            $('#myModal').modal('hide');
            }, 7000);
        }
        });
        
    });

    $('#myModal').on('hidden.bs.modal', function() {
        hideAndReset();
    });

    function showConfirmation(result) {
        $('#contact-form').fadeOut(500, function() {
            $('#contact-results').html(result);
            $('#contact-thanks').fadeIn(500);
        });
    }

    function hideAndReset() {
        $('#contact-thanks').hide();
        document.getElementById('contact').reset();
        $('#contact-form').show();
    }
});