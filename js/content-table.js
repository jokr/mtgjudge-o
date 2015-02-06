(function ($) {
    var $table = $('#table-of-contents'),
        $window = $(window),
        offset = $table.offset(),
        html = '<ul class="nav nav-pills">';

    $('article h2').each(function () {
        var el = $(this),
            title = el.text(),
            id = title.toLowerCase().replace(/ /g, '-').replace(/'|\?|!/g, "");
        el.attr('id', id);

        html += '<li><a href="#' + id + '">' + title + '</a></li>';
    });

    html += '</ul>';

    $table.find('nav').append(html);

    function scrollFloat() {
        var scroll = $window.scrollTop();
        if (scroll > offset.top) {
            $table.css({ 'position': 'fixed', 'top': '100px'});
        } else {
            $table.css({ 'position': 'static', 'top': '' });
        }
    }

    $window.scroll(scrollFloat);

    if (navigator.userAgent.toLowerCase().indexOf('firefox') == -1) {
        $('body').scrollspy();
    }
})(jQuery);