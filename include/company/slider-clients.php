<section class="container slider-client__wrap">
    <div class="slider-clients" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "autoplay": "true", "autoplaySpeed": "3000"}'>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/dentastil.jpg" alt="Наши клиенты"
                 title="Наши клиенты"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/keramsit.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/malina.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/mig.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/ocean.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/otel.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/rosgostrah.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
        <div class="slide">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/viktoria.jpg" alt="Сертификат качества Формула климата"
                 title="Сертификат качества Формула климата"/>
        </div>
    </div>
</section>

<script>
    $('.slider-clients').slick({
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