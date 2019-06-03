<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
$APPLICATION->SetTitle("О компании");
?>
    <div class="company-icon__container">
        <div class="clients-icon__item">
            <a href="/company/#sertificati/">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/company/license.png" alt="">
                <p>Сертификаты</p>
            </a>
        </div>
        <div class="company-icon__item">
            <a href="/company/#otzivi/">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/clients/review.png" alt="">
                <p>Отзывы</p>
            </a>
        </div>
        <div class="company-icon__item">
            <a href="/company/#nam-doveriaut/">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/company/trust.png" alt="">
                <p>Нам доверяют</p>
            </a>
        </div>
        <div class="company-icon__item">
            <a href="/company/#napisat-directory/">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/company/message.png" alt="">
                <p>Написать директору</p>
            </a>
        </div>
    </div>

<p class="company-description">
    Купить кондиционер в Рязани вы можете в компании «Формула Климата», которая работает на рынке кондиционеров уже с
    2003 года. 13 лет опыта позволяют нам делать нашу работу качественно и без лишний промедлений. Однако, с началом
    прихода сезона кондиционеров (обычно конец март, начало апреля), в компании может быть определенная запись на установку.
</p>
<p class="company-description">
    На просторах нашего сайта вы можете выбрать различные модели и бренды кондиционеров. Мы постоянно тестируем новое
    оборудование и, если оно удовлетворяет нашим запросам и качеству, то добавляем его в продажу. Цены на товары поддерживаем
    актуальными, но в зависимости от курса доллара они могут колебаться как в большую, так и меньшую сторону. Поэтому,
    если вы собрались купить кондиционеры в Рязани, то можете заказать их через наш сайт или по телефону у менеджера.
</p>
    <div id="sertificati/">
    <h2>Сертификаты</h2>
 <?$APPLICATION->IncludeFile(SITE_DIR."/include/company/slider-certificates.php", Array(), Array("MODE"=>"html")); ?>
    </div>
<div id="otzivi/">
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
<a name="nam-doveriaut/"></a>
<h2>Нам доверяют</h2>
 <?$APPLICATION->IncludeFile(SITE_DIR."/include/company/slider-clients.php", Array(), Array("MODE"=>"html")); ?>
<a name="napisat-directory/"></a>
<h2>Ваше сообщение получит лично генеральный директор</h2>
<div class="director-about">
    <div class="director-about__item">
        <img src="/bitrix/templates/aspro_next/images/director.jpg" alt="Директор Формула климата"
             title="Директор Формула климата"/>
    </div>
    <div class="director-about__item">
        <p>
            Уважаемые Клиенты!<br/>
            Мы благодарны вам за ваши отзывы о нашей компании — они позволяют нам двигаться вперед. Если по каким-то
            причинам у вас возникло недовольство относительно работы наших сотрудников, смело пишите, и мы примем меры.
            Коллектив компании «Формула Климата» будет также признателен вам, если вы напишите нам о качественно сделанной работе.
        </p>
        <p>
            Генеральный директор «Формула Климата»
        </p>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:form", 
	"form-director", 
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "Y",
		"SHOW_ANSWER_VALUE" => "Y",
		"SHOW_EDIT_PAGE" => "N",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "N",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "/thanks/",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "11",
		"COMPONENT_TEMPLATE" => "form-director",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
<script type="text/javascript">
    $('a').on('click', function(){
        if(this.hash) $(document).data('h',1);
    });
    $(document).scroll(function(){
        if($(this).data('h')) $(this).data('h',0).scrollTop($(this).scrollTop()-70);
    });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>