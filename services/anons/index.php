<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
$APPLICATION->SetTitle("Сводная услуг");
?>
    <h2>Монтаж оборудования</h2>
        <div class="services__container">
            <div class="services__item shine">
                <p class="services__description">Монтаж кондициониров</p>
                <a href="#">
                    <img src="/images/services/anons/montazh-konditsionerov.jpg" alt="">
                </a>
            </div>

            <div class="services__item shine">
                <p class="services__description">Монтаж вентиляции</p>
                <a href="#">
                    <img src="/images/services/anons/montazh-vent.jpg" alt="">
                </a>
            </div>

            <div class="services__item shine">
                <p class="services__description">Монтаж теплового оборудования</p>
                <a href="#">
                    <img src="/images/services/anons/montazh-teplo-oborudovania.jpg" alt="">
                </a>
            </div>
        </div>

    <h2>Сервисное обслуживание</h2>
        <div class="services__container">
            <div class="services__item shine">
                <p class="services__description">Обслуживание кондиционеров</p>
                <a href="#">
                    <img src="/images/services/anons/obslujivanie-konditsionerov.jpg" alt="">
                </a>
            </div>

            <div class="services__item shine">
                <p class="services__description">Обслуживание систем вентиляции</p>
                <a href="#">
                    <img src="/images/services/anons/obsl-vent.jpg" alt="">
                </a>
            </div>

            <div class="services__item shine">
                <p class="services__description">Обслуживание теплового оборудования</p>
                <a href="#">
                    <img src="/images/services/anons/obsl-tepl.jpg" alt="">
                </a>
            </div>
        </div>


    <script type="text/javascript">
        $('a').on('click', function(){
            if(this.hash) $(document).data('h',1);
        });
        $(document).scroll(function(){
            if($(this).data('h')) $(this).data('h',0).scrollTop($(this).scrollTop()-70);
        });
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>