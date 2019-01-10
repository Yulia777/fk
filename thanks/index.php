<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
//$APPLICATION->SetTitle("Страница 'Спасибо' ");
?>
<div class="thanks">
    <div class="thanks__item">
        <h1>
            Спасибо, Ваше сообщение отправлено!
        </h1>
        <h4>
            Мы обязательно свяжемся с Вами в ближайшее время, а пока Вы можете ознакомится с полезными статьями нашей компании!
        </h4>
    </div>
    <div class="thanks__item">
        <?if($isShowBlog):?>
            <div class="maxwidth-theme">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => SITE_DIR."include/mainpage/comp_blog.php",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "AREA_FILE_RECURSIVE" => "Y",
                        "EDIT_TEMPLATE" => "standard.php"
                    ),
                    false
                );?>
            </div>
        <?endif;?>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>