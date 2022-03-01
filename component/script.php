<script type="text/javascript" src="public/js/all_minify.min.js?ver=<?php echo VER; ?>"></script>
<script>
    $(document).ready(function(){
        function rating(){
            const item = $('.rating');
            item.each((i, v) => {
                console.log(v);
                let count = $(v).data('star');
                $(v).starrr({
                    rating: count,
                    max: 5,
                    // readOnly: true 
                    // change: function(e, value){ }
                })
            });

        }
        rating();

        var btn = $('.scroll-up');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });
        
    });
    var num = 150; //number of pixels before modifying styles

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('.header-category').addClass('fixed');
        } else {
            $('.header-category').removeClass('fixed');
        }
});
</script>