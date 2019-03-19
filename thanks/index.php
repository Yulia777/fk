<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
$APPLICATION->SetTitle("Спасибо!");
?>
<div class="thanks">
    <div class="thanks__logo">
        <img src="/upload/CNext/ef9/ef90a15558d51d472281839fb237f24b.png" alt="Формула климата">
        <p>продажа, монтаж и обслуживание <br>климатического оборудования</p>
    </div>
    <div class="thanks__text">
        <h1>
            Заявка принята.
        </h1>
        <h4>
            Скоро мы свяжемся с вами. Спасибо.
        </h4>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");