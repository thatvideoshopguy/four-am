// SCROLL FADE OUT AND FADE IN
$(window).on('scroll', function () {
    var curPos = $(window).scrollTop();
    $('body').css('background-position', '0 -' + curPos * .1 + 'px');
    fadePanels(curPos);
}).scroll();

function fadePanels(curPos) {
    var panels = $('.entry');

    for (var i = 0; i < panels.length; i++) {
        var offsetTop = $(panels[i]).offset().top;
        var halfPanel = (($(panels[i]).height() + 80) / 2) // half the panel height + padding
        var offsetHalf = halfPanel + offsetTop;

        $(panels[i]).attr('data-scroll-top', offsetTop);
        $(panels[i]).attr('data-scroll-half', offsetHalf);

        var j = (curPos - offsetHalf) / halfPanel;

        if (curPos > $(panels[i]).data('scroll-half')) {
            $(panels[i]).css('opacity', 1 - (j));
        } else {
            $(panels[i]).css('opacity', 2.2 + (j));
        }
    }
}


// STICKY TITLE CENTER (Title)
$(function () {
    jQuery.fn.center = function () {
        this.css("position", "fixed");
        this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
        //        this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
        return this;
    }

    $('.entry-title').center();
    $(window).resize(function () {
        $('.entry-title').center();
    });
});


// STICKY TITLE CENTER (Error Page)
$(function () {
    jQuery.fn.center = function () {
        this.css("position", "fixed");
        this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
        this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
        return this;
    }

    $('.error').center();
    $(window).resize(function () {
        $('.error').center();
    });
});


// NEXT & PREV BUTTONS
$(document).ready(function () {
    $('#div0').addClass('current');
});

$('div.entry').first();

$('a.display').on('click', function (e) {
    e.preventDefault();

    var t = $(this).text(),
        that = $(this);

    if (t === 'next' && $('.current').next('div.entry').length > 0) {
        var $next = $('.current').next('.entry');
        var top = $next.offset().top;

        $('.current').removeClass('current');

        $('body').animate({
            scrollTop: top
        }, 1300, function () {
            $next.addClass('current');
        });
    } else if (t === 'prev' && $('.current').prev('div.entry').length > 0) {
        var $prev = $('.current').prev('.entry');
        var top = $prev.offset().top;

        $('.current').removeClass('current');

        $('body').animate({
            scrollTop: top
        }, function () {
            $prev.addClass('current');
        });
    }
});