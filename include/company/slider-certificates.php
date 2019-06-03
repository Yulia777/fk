<section class="container slider-cert__wrap">
    <div class="slider-cert" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": "true", "autoplaySpeed": "3000"}'>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cert/cert1.png" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
    </div>
</section>

<script>
    $('.slider-cert').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
</script>