$(document).ready(function(){
    var br = $.browser;
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top < 61) {
            $(".sticky_blog").css({top: '0', position: 'relative', width: '290px'});
        } else if ((!br.msie) || ((br.msie) && (br.version > 7))) {
            $(".sticky_blog").css({top: '22px', position: 'fixed', width: '290px'});
        } else if ((br.msie) && (br.version <= 7)) {
            $(".sticky_blog").css({top: '22px', position: 'fixed', width: '290px'});
        }
    });
});