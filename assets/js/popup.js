jQuery(document).ready(function($) {
    $(window).on('load', function() {
        $('#popup').css('display', 'flex');
    });

    $('#closePopupBtn').on('click', function() {
        $('#popup').css('display', 'none');
    });

    $(window).on('click', function(event) {
        if (event.target == $('#popup')[0]) {
            $('#popup').css('display', 'none');
        }
    });
});

