(function() {
    $("#cssMod").submit(function(e) {
        var data = $(this).serializeArray();
        var color = unescape(data[0].value);
        var fontColor = unescape(data[1].value);
        var fontFamily = unescape(data[2].value);

        $(".panel-body").css({"background-color": color,
                              "color": fontColor,
                              "font-family": fontFamily});
        e.preventDefault();
        return false;
    })
})();
