<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции");
global $promoFilter;
$promoFilter = array(
    "=PROPERTY_123" => array(0 => "52")
);
//$promoFilter = array();

?>

<div class="block">
    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog_block", 
	array(
		"USE_REGION" => "N",
		"STORES" => "",
		"SHOW_UNABLE_SKU_PROPS" => "Y",
		"IBLOCK_TYPE" => "aspro_next_catalog",
		"IBLOCK_ID" => "17",
		"SHOW_COUNTER_LIST" => "Y",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"AJAX_REQUEST" => "N",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "asc",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_NAME" => "promoFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGE_ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "4",
		"DISPLAY_TYPE" => "block",
		"TYPE_SKU" => "TYPE_1",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SHOW_ARTICLE_SKU" => "Y",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFER_TREE_PROPS" => array(
			0 => "SIZES",
			1 => "COLOR_REF",
		),
		"OFFERS_LIMIT" => "10",
		"SECTION_URL" => "/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/#ELEMENT_CODE#/",
		"BASKET_URL" => "/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SET_LAST_MODIFIED" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_GROUPS" => "N",
		"CACHE_FILTER" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"DISPLAY_COMPARE" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FILE_404" => "",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"USE_PRODUCT_QUANTITY" => "Y",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Акционные товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"ADD_CHAIN_ITEM" => "N",
		"SHOW_QUANTITY" => "Y",
		"SHOW_QUANTITY_COUNT" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"USE_STORE" => "Y",
		"MAX_AMOUNT" => "20",
		"MIN_AMOUNT" => "10",
		"USE_MIN_AMOUNT" => "N",
		"USE_ONLY_MAX_AMOUNT" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"LIST_DISPLAY_POPUP_IMAGE" => "Y",
		"DEFAULT_COUNT" => "1",
		"SHOW_MEASURE" => "Y",
		"SHOW_HINTS" => "Y",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"SHOW_SECTIONS_LIST_PREVIEW" => null,
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "UF_SECTION_DESCR",
		"SHOW_SECTION_LIST_PICTURES" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
		),
		"SALE_STIKER" => "SALE_TEXT",
		"STIKERS_PROP" => "HIT",
		"SHOW_RATING" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"COMPONENT_TEMPLATE" => "catalog_block",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_ALL_WO_SECTION" => "Y",
		"CUSTOM_FILTER" => "",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"COMPARE_PATH" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	$component,
	array(
		"HIDE_ICONS" => "N"
	)
);?>
</div>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>