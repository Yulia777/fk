<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
$APPLICATION->SetTitle("Спасибо!");
?>

    <style>
        .top_inner_block_wrapper {
            display: none;
        }
    </style>
<div class="thanks">
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