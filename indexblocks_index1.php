<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?global $isShowSale, $isShowCatalogSections, $isShowCatalogElements, $isShowMiddleAdvBottomBanner, $isShowBlog;?>
<div class="grey_block">
	<div class="maxwidth-theme">
		<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"top_big_banners", 
	array(
		"IBLOCK_TYPE" => "aspro_next_adv",
		"IBLOCK_ID" => "3",
		"TYPE_BANNERS_IBLOCK_ID" => "1",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "10",
		"NEWS_COUNT2" => "0",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"PROPERTY_CODE" => array(
			0 => "TEXT_POSITION",
			1 => "TARGETS",
			2 => "TEXTCOLOR",
			3 => "URL_STRING",
			4 => "BUTTON1TEXT",
			5 => "BUTTON1LINK",
			6 => "BUTTON2TEXT",
			7 => "BUTTON2LINK",
			8 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "TOP",
		"BANNER_TYPE_THEME_CHILD" => "",
		"COMPONENT_TEMPLATE" => "top_big_banners",
		"FILTER_NAME" => "arRegionLink",
		"CATALOG" => "/catalog/"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_tizers.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
	</div>
	<hr>
</div>

<div class="maxwidth-theme mainpage-custom">
    <div class="main-review">
        <section class="main-review__left">
            <h2>
                 <a href="/reviews/">Отзывы клиентов:</a>
            </h2>
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
		"NEWS_COUNT" => "5",
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
		"SECTIONS_TYPE_VIEW" => "sections_1",
		"SECTION_TYPE_VIEW" => "section_1",
		"T_REVIEWS" => "",
		"T_STAFF" => "",
		"IMAGE_CATALOG_POSITION" => "left",
		"SHOW_CHILD_SECTIONS" => "Y",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
        </section>
        <section class="main-review__right">
            <div class="main-review__our-clients">
                <h2>
                   <a href="/company/index.php/#nam-doveriaut/">Нам доверяют:</a>
                </h2>
                <img src="/images/main/our-clients.jpg" alt="Нам доверяют">
            </div>

            <div class="main-review__our-objects">
                <h2>
                    <a href="/projects/">Фото наших объектов:</a>
                </h2>
                <?php
                for ($photo = 1; $photo <=9; $photo++) {?>
                    <a href="/images/main/objects/<?= $photo ?>big-min.jpg" data-fancybox-group="our_objects" class="popup_link fancy">
                        <img src="/images/main/objects/<?= $photo ?>small-min.jpg" alt="Формула Климата">
                    </a>
                <?php } ?>
            </div>

            <div class="main-review__vk">
                <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

                <!-- VK Widget -->
                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, width: "auto"}, 119260418);
                </script>
            </div>


        </section>
    </div>

    <hr class="hr-shadow">

    <div class="main-about">
        <section class="main-about__left">
            <h2>О компании:</h2>
            <img src="/upload/CNext/ef9/ef90a15558d51d472281839fb237f24b.png" alt="Формула климата - лого">
            <p><strong>Купить кондиционер в Рязани</strong> вы можете в компании «Формула Климата», которая работает на
                рынке кондиционеров уже с 2003 года. 13 лет опыта позволяют нам делать нашу работу качественно и без
                лишний промедлений. Однако, с началом прихода сезона кондиционеров (обычно конец март, начало апреля), в
                компании может быть определенная запись на установку.</p>
            <p>На просторах нашего сайта вы можете выбрать различные модели и бренды кондиционеров. Мы постоянно
                тестируем новое оборудование и, если оно удовлетворяет нашим запросам и качеству, то добавляем его в
                продажу. Цены на товары поддерживаем актуальными, но в зависимости от курса доллара они могут колебаться
                как в большую, так и меньшую сторону. Поэтому, если вы собрались купить <strong>кондиционеры в
                    Рязани</strong>, то можете заказать их через наш сайт или по телефону у менеджера.</p>
            <p><strong>Для справки:</strong> Не так давно кондиционеры были атрибутом роскоши. Сейчас же они стали
                необходимым условиям для большинства граждан. Кондиционеры помогут вам улучшить температурные условия
                как дома, в квартире, так и в офисных, складских помещениях. А в таких помещениях, как: аптеки,
                серверные, супермаркеты, кафе, рестораны, спортивные залы – работа без них бы и вовсе остановилась в
                жаркое время.</p>
            <p>Благо, что купить кондиционер сейчас не представляет никакого труда. На рынке представлено огромное
                количество компаний, которые занимаются как продажей, так и монтажом кондиционеров. Вопрос всегда
                остается в качестве оборудования и оказываемых услугах.</p>
        </section>
        <section class="main-about__right">
            <h2>Преимущества:</h2>
            <div class="main-about__list">
                <ol>
                    <li>Гарантия <b>3 года</b> на кондиционеры и установку</li>
                    <li><b>Более 2700</b> установленных кондиционеров за 13 лет</li>
                    <li>7 из 10 клиентов <b>рекомендуют</b> нас своим друзьям и коллегам</li>
                    <li>Являемся <b>официальными дилерами</b> климатического оборудования</li>
                    <li>Монтаж делаем <b>в срок и без промедлений</b></li>
                    <li><b>Любим чистоту</b>, не оставляем грязь после монтажа</li>
                    <li><b>Менее 2% гарантийных случаев.</b> В основном это связно с заводским браком</li>
                    <li><b>Удобная</b> форма оплаты: наличными, безналичными, предоплата, постоплата.</li>
                    <li>По телефону и на месте у нас <b>одна и та же цена</b></li>
                    <li><b>Постоянные акции</b>, выгодные предложения на покупку оборудования</li>
                    <li><b>Бесплатная</b> доставка кондиционеров по Рязани</li>
                    <li><b>Бесплатный</b> выезд замерщика по Рязани</li>
                </ol>
            </div>
        </section>
    </div>
</div>


<?php /*Everything bellow has been turned off in Aspro settings*/?>

<?if($isShowCatalogSections || $isShowCatalogElements || $isShowMiddleAdvBottomBanner):?>
	<div class="maxwidth-theme">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_catalog_sections.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_catalog_hit.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_DIR."include/mainpage/comp_adv_middle.php",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			),
			false
		);?>	
	</div>
<?endif;?>

<?if($isShowSale):?>
	<div class="grey_block">
		<div class="maxwidth-theme">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"PATH" => SITE_DIR."include/mainpage/comp_news_akc.php",
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "",
					"AREA_FILE_RECURSIVE" => "Y",
					"EDIT_TEMPLATE" => "standard.php"
				),
				false
			);?>
		</div>
	</div>
<?endif;?>

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

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/mainpage/comp_bottom_banners.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>

<div class="maxwidth-theme">
	<?global $arRegion, $isShowCompany;?>
	<?if($isShowCompany):?>
		<div class="company_bottom_block">			
			<div class="row wrap_md">
				<div class="col-md-3 col-sm-3 hidden-xs img">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/mainpage/company/front_img.php", Array(), Array( "MODE" => "html", "NAME" => GetMessage("FRONT_IMG") )); ?>
				</div>
				<div class="col-md-9 col-sm-9 big">
					<?if($arRegion):?>
						<?=$arRegion['DETAIL_TEXT'];?>
					<?else:?>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "front", Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/mainpage/company/front_info.php","EDIT_TEMPLATE" => ""));?>
					<?endif;?>
				</div>
			</div>			
		</div>
	<?endif;?>	
	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"PATH" => SITE_DIR."include/mainpage/comp_brands.php",
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => "standard.php"
		),
		false
	);?>
</div>

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/mainpage/comp_instagramm.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>
<h1 style="display: none">Формула климата</h1>
