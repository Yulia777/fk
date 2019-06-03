<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
$APPLICATION->SetTitle("Для клиентов");
?>

        <div class="clients-icon__container">
            <div class="clients-icon__item">
                <a href="/clients/index.php/#delivery/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/delivery.png" alt="">
                    <p>Доставка</p>
                </a>
            </div>
            <div class="clients-icon__item">
                <a href="/clients/index.php/#pay/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/pay.png" alt="">
                    <p>Оплата</p>
                </a>
            </div>
            <div class="clients-icon__item">
                <a href="/clients/index.php/#return/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/return.png" alt="">
                    <p>Возврат</p>
                </a>
            </div>
            <div class="clients-icon__item">
                <a href="/clients/index.php/#reviews/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/review.png" alt="">
                    <p>Отзывы</p>
                </a>
            </div>
            <div class="clients-icon__item">
                <a href="/clients/index.php/#quests/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/quest.png" alt="">
                    <p>Вопрос-Ответ</p>
                </a>
            </div>
        </div>

    <div id="delivery/">
        <h2>Доставка</h2>
        <h4>Доставка по городу</h4>
            <p>
                Доставка по Рязани  осуществляется бесплатно при заказе свыше 10 000 руб.
                Доставка заказа до 10 000 руб. стоит 500 руб.
            </p>
        <h4> Доставка по России</h4>
             <p>Доставка до транспортной компании осуществляется бесплатно при заказе свыше 10 000 руб.
                Доставка заказа до 10 000 руб. стоит 500 руб.
                Далее по тарифам выбранной транспортной компании.
             </p>
            <p>Мы работаем со следующими транспортными компаниями:</p>
                <img class="transport-company" src="<?=SITE_TEMPLATE_PATH?>/images/transport-company.jpg" alt="Транспортные компании" >
            <p> Также по вашему желанию мы можем отвезти груз и в другую ТК.</p>
    </div>

    <div id="pay/">
        <h2>Способы оплаты</h2>
        <ul>
            <li>наличными</li>
            <li>безналичным путем, на основании счета</li>
            <li>электронными деньгами: WebMoney, Яндекс.Деньги (уточните у менеджера)</li>
        </ul>
    </div>

    <div id="return/">
        <h2>Возврат</h2>
        <p>Закон «О защите прав потребителей» гласит – потребитель вправе обменять непродовольственный товар надлежащего качества на аналогичный у продавца, если он не подошел по форме, габаритам, фасону, расцветке, размеру или комплектации. Однако климатическая техника (в частности, кондиционер) – это технически сложное изделие бытового назначения, и такого рода качественные товары входят в перечень, утвержденный Правительством РФ, которые не подлежат возврату или обмену на аналогичный товар другого размера, формы, габарита, фасона, расцветки или комплектации.</p>
        <p>Но если купленная климатическая техника оказалась бракованной, то вы вправе вернуть некачественный товар на основе гарантии и потребовать возврата денег, заменить его на аналогичный, либо другой – с доплатой.</p>
    </div>


<div id="reviews/">
<h2>Отзывы</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"reviews-company", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALSO_ITEMS_COUNT" => "5",
		"ALSO_ITEMS_POSITION" => "bottom",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPONENT_TEMPLATE" => "reviews-company",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FB_USE" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_VK_USE" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"FORM" => "Y",
		"FORM_BUTTON_TITLE" => "",
		"FORM_ID" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "23",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_POSITION" => "left",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LINE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_VIEW" => "slider",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => "",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_NEXT_ELEMENT" => "N",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_TOP_MAP" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "RAND",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TEMPLATE_THEME" => "blue",
		"T_ALSO_ITEMS" => "",
		"T_CLIENTS" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_SERVICES" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
    <div class="company-wrap">
        <a href="/reviews/" class="blue-btn">Посмотреть все отзывы</a>
    </div>
</div>

    <div id="quests/">
        <h2>Вопрос/Ответ</h2>
            <div class="quest-list">
                <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"faq", 
	array(
		"IBLOCK_TYPE" => "aspro_next_content",
		"IBLOCK_ID" => "9",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/info/faq/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TITLE_BUTTON",
			1 => "LINK_BUTTON",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TITLE_BUTTON",
			1 => "LINK_BUTTON",
			2 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "accordion",
		"SHOW_TABS" => "N",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"SHOW_SECTION_NAME" => "N",
		"USE_SHARE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"COUNT_IN_LINE" => "3",
		"IMAGE_POSITION" => "left",
		"COMPONENT_TEMPLATE" => "faq",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"SHOW_ASK_QUESTION_BLOCK" => "Y",
		"S_ASK_QUESTION" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "",
		)
	),
	false
);?>
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