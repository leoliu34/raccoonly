$(document).ready(function() {
    var callback = function($radio) {
        if($radio.val() == 'yelling') {
            alert('Yelling');
        } else {
            alert('Staring');
        }
    };

    (function(callback) {
        $('.choices').on('click', function (e) {
            var $radio = $(e.target);
            callback($radio);
        });
    })();

    $(window).on('resize', function() {
        if(window.innerWidth < 1200) {
            $('#collapse-two img').css({
                'max-width': '100%',
                'width': '100%',
                'margin-bottom': '30px'
            });
        } else {
            $('#collapse-two img').css({
                'max-width': '530px',
                'width': '530px',
                'margin-bottom': '20px'
            });
        }
    });
});