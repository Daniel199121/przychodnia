(function() {
    $('.form-control').bind('blur', function () {
        $(this).parent().next('li').find('.help-text').hide();
    }).bind('focus', function () {
        $(this).parent().next('li').find('.help-text').show();
    });
    $('input[type=reset]').click(function(e) {
        var c = window.confirm("Na pweno?");
        if (c!=true) {
           return false;
        }

    });
    $('input[type=submit]').click(function(e) {
        var c = window.confirm("Na pweno?");
        if (c!=true) {
           return false;
        }

    });
})();
