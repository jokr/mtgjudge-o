(function ($) {
    var $table = $('#table-of-contents'),
        $window = $(window),
        offset = $table.offset(),
        html = '<ul class="nav nav-pills">';

    $('article h2').each(function () {
        el = $(this);
        title = el.text();
        id = title.toLowerCase().replace(/ /g, '-').replace(/'|\?|!/g, "");
        el.attr('id', id);

        newLine = '<li>' +
            '<a href="#' + id + '">' + title + '</a>' +
            '</li>';

        html += newLine;
    });

    html += '</ul>';

    $table.find('.fixed-wrap').append(html);

    $('body').scrollspy({target: '#table-of-contents'});

    /*$window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $table.stop().animate({
                marginTop: $window.scrollTop() - offset.top + 15
            });
        } else {
            $table.stop().animate({
                marginTop: 0
            });
        }
    });*/

})(jQuery);