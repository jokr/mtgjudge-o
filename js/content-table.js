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

    $table.find('nav').append(html);

    $('body').scrollspy('refresh');
})(jQuery);