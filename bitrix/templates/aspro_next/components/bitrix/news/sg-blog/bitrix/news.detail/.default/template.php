<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php

$counter_view = 0;
$pdf_article = '';
$time_to_read = 0;

if(CModule::IncludeModule("iblock")){
    //Getting View counter
    $res = CIBlockElement::GetByID($arParams['ELEMENT_ID']);
    if($ar_res = $res->GetNext()){
        $counter_view = $ar_res['SHOW_COUNTER']+1179;
    }
    //Getting user fields
    $db_props = CIBlockElement::GetProperty($arParams['IBLOCK_ID'], $arParams['ELEMENT_ID'], "sort", "asc", array());
    $PROPS = array();
    while($ar_props = $db_props->Fetch()) {
        $PROPS[$ar_props['CODE']] = $ar_props['VALUE'];
    }
    $pdf_article = CFile::GetPath($PROPS['pdf_article']);
    $time_to_read = $PROPS['time_to_read'];
}

?>
<section class="blog" itemscope itemtype="http://schema.org/BlogPosting">
<!--    <div class="blog__item">
        <img class="sidebar-fixed js-fly-images" src="/images/sidear/bf.png"
             onclick="yaCounter44418460.reachGoal('black-friday'); return true;"/>
    </div>-->

    <link itemprop="mainEntityOfPage" itemscope
          href="<? echo( 'https://' . $_SERVER['SERVER_NAME'] . $arParams['IBLOCK_URL'] . $arParams['ELEMENT_CODE'] . '/' ) ?>"/>

    <div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img alt="Генератор Продаж" itemprop="image url" src="/bitrix/templates/sales-generator/images/saleslogo_black_bg.png"/>
            <meta itemprop="width" content="200px">
            <meta itemprop="height" content="60px">
        </div>
        <meta itemprop="telephone" content="8 (800) 775 43 06">
        <meta itemprop="address" content="Россия, Рязань, Куйбышевское шоссе, 25">
        <meta itemprop="name" content="Генератор Продаж">
    </div>

    <meta itemprop="datePublished" content="<? $arResult["ACTIVE_FROM"] = ConvertDateTime($arResult["ACTIVE_FROM"], "YYYY-MM-DD HH:MI:SS", "ru"); echo $arResult["ACTIVE_FROM"]; ?>">
    <meta itemprop="dateModified" content="<? $arResult["TIMESTAMP_X"] = ConvertDateTime($arResult["TIMESTAMP_X"], "YYYY-MM-DD HH:MI:SS", "ru"); echo $arResult["TIMESTAMP_X"]; ?>">

    <span style="display: none;" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <span itemprop="name">Генератор Продаж</span>
    </span>

    <article class="article blog__item" itemprop="articleBody">
        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
            <h1 itemprop="headline"><?=$arResult["NAME"]?></h1>
        <?endif;?>
        <span style="display: none;" itemprop="author">Генератор Продаж</span>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
            <?$detailImage = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>'680', 'height'=>'340'), BX_RESIZE_IMAGE_EXACT, true);?>
            <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <img
                    itemprop="image url"
                    class="detail-image"
                    border="0"
                    src="<?= $detailImage["src"] ?>"
                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
            />
            <meta itemprop="width" content="680">
            <meta itemprop="height" content="340">
            </span>
        <?endif?>
        <!-- Блок "Время чтения" начало -->

        <div class="time_to_read">
            <div class="time">
                Время чтения: <strong><?php echo $time_to_read;?> минут</strong>
            </div>
            <div class="button_time">
                <button class="time_send" id="out">Нет времени читать?</button>
            </div>
            <div class="sharing_buttons">
                <div class="social-likes social-likes_visible social-likes_ready">
                    <div class="social-likes__widget social-likes__widget_facebook" title="Поделиться ссылкой на Фейсбуке"><a class="js-fb" href="https://www.facebook.com/sharer.php?src=sp&u=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&picture=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank" ><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span></a></div>
                    <div class="social-likes__widget social-likes__widget_twitter" title="Поделиться ссылкой в Твиттере"><a class="js-twitter" href="http://twitter.com/share?text=<?=$arResult['NAME'];?>.<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>" target="_blank"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></a></div>
                    <div class="social-likes__widget social-likes__widget_vkontakte" title="Поделиться ссылкой во Вконтакте"><a class="js-vk" href="https://vk.com/share.php?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&image=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"><span class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span></a></div>
                    <div class="social-likes__widget social-likes__widget_odnoklassniki" title="Поделиться ссылкой в Одноклассниках"><a class="js-ok" target="_blank" href="https://connect.ok.ru/offer?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&imageUrl=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2"><span class="social-likes__button social-likes__button_odnoklassniki"><span class="social-likes__icon social-likes__icon_odnoklassniki"><span class="social-likes__counter social-likes__counter_odnoklassniki social-likes__counter_empty"></span></a></div>
                    <div class="social-likes__widget social-likes__widget_plusone" title="Поделиться ссылкой в Гугл-плюсе"><a href="https://plus.google.com/share?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&utm_source=share2" class="js-gpl" target="_blank"><span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"><span class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span></a></div>
                    <i class="eye_watching"></i>
                    <div class="counter_eye"><? echo $counter_view;?></div>
                </div>

            </div>
        </div>
        <div class="up_and_down" data-height="110">
            Отправим материал вам на:
            <div class="send_to">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/icons/mail.png" alt="" class="slide_form">

                <a href="https://vk.com/share.php?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&image=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" class="js-vk" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/vk.png"  alt=""></a>

                <a href="https://www.facebook.com/sharer.php?src=sp&u=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&picture=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" class="js-fb" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/fb.png"  alt=""></a>

                <a href="https://connect.ok.ru/offer?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&imageUrl=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" class="js-ok" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/ok.png"  alt=""></a>
            </div>


            <div class="form_wrap" data-height="130">

                <form name="send_news" id="send_news">
                    <input type="hidden" name="title" value="<?=$arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']?>"/>
                    <input type="hidden" name="pdf" value="<?=$pdf_article?>"/>
                    <input type="textzone" name="email" placeholder="Введите ваш email..." value="" required>
                    <div style="clear: both;"></div>
                    <input type="button" class="js-send-arcticle" value="Отправить">
                </form>

            </div>
        </div>

        <!--Блок "Время чтения" конец -->
        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
            <p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
        <?endif;?>
        <?if($arResult["NAV_RESULT"]):?>
            <?/*if($arParams["DISPLAY_TOP_PAGER"]):*/?><!--<?/*=$arResult["NAV_STRING"]*/?><br />--><?/*endif;*/?>
            <?/*echo $arResult["NAV_TEXT"];*/?><!--
            <?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><br /><?/*=$arResult["NAV_STRING"]*/?>--><?/*endif;*/?>
        <?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
            <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
            <?echo $arResult["PREVIEW_TEXT"];?>
        <?endif?>
        <div class="social-likes social-likes_visible social-likes_ready">
            <div class="social-likes__widget social-likes__widget_facebook" title="Поделиться ссылкой на Фейсбуке"><a class="js-fb" href="https://www.facebook.com/sharer.php?src=sp&u=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&picture=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank" ><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_twitter" title="Поделиться ссылкой в Твиттере"><a class="js-twitter" href="http://twitter.com/share?text=<?=$arResult['NAME'];?>.<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>" target="_blank"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span></a></div>
            <div class="social-likes__widget social-likes__widget_vkontakte" title="Поделиться ссылкой во Вконтакте"><a class="js-vk" href="https://vk.com/share.php?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&image=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"></span>Вконтакте</span><span class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_odnoklassniki" title="Поделиться ссылкой в Одноклассниках"><a class="js-ok" target="_blank" href="https://connect.ok.ru/offer?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&imageUrl=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2"><span class="social-likes__button social-likes__button_odnoklassniki"><span class="social-likes__icon social-likes__icon_odnoklassniki"></span>Одноклассники</span><span class="social-likes__counter social-likes__counter_odnoklassniki social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_plusone" title="Поделиться ссылкой в Гугл-плюсе"><a href="https://plus.google.com/share?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&utm_source=share2" class="js-gpl" target="_blank"><span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"></span>Google+</span><span class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span></a></div>
        </div>
</article>
    <aside class="blog__sidebar blog__item">
            <!--Самое читаемое-->
            <a href="https://sales-generator.ru/kompleksnoe-prodvijenie/"
               target="_blank"
               class="js-sliding-sidebar"
               onclick="yaCounter44418460.reachGoal('BANER_SAIDBAR'); return true;">
                <img src="/images/sidear/sidebar-img.jpg" alt="Рост продаж" title="Рост продаж">
                <!--<button type="button" class="button blog__sidebar--btn">Узнать как</button>-->
            </a>
            <?/*$APPLICATION->IncludeFile(SITE_DIR."/include/components/article/sidebar_news.php", Array(), Array("MODE"=>"php"));*/?>
            <!--Категории статей-->
            <?$APPLICATION->IncludeFile(SITE_DIR."/include/components/article/sidebar_categories.php", Array(), Array("MODE"=>"php"));?>
    </aside>

    <!--<div class="advaudit-icon js-advaudit-icon"><img src="/images/advauditbtn.png" title="Комплексный аудит сайта"></div>-->
<!--    <div class="blog__item">
        <img class="sidebar-fixed js-fly-images" src="/images/sidear/bf.png"
             onclick="yaCounter44418460.reachGoal('black-friday'); return true;"/>
    </div>-->
</section>
<!--Complex audit banner START-->
<?//$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/sites_complex_audit_popup.php", Array(), Array("MODE"=>"php"));?>
<!--Complex audit banner END-->
<!-- Articles banner START -->

<!--Turned off until 02/07/18-->

<!-- AdvAudit banner start -->
<?//$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/advertising_audit.php", Array(), Array("MODE"=>"php"));?>
<!-- AdvAudit banner END -->

<!-- Exit popup start -->
<?$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/exitpopup.php", Array(), Array("MODE"=>"php"));?>
<!-- Exit popup END -->

<!-- Day popup start -->
<?//$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/8am8pmPopup.php", Array(), Array("MODE"=>"php"));?>
<!-- Day popup END -->

<?/*if(date('D') == 'Sat' || date('D') == 'Sun') {
    $APPLICATION->IncludeFile(SITE_DIR."include/components/popups/cool_articles.php", Array(), Array("MODE"=>"php")); }*/?>
<!-- Articles banner END -->
<!-- Audit banner start -->
<?$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/transparent_audit.php", Array(), Array("MODE"=>"php"));?>
<!-- Audit banner END -->

<!-- MailMunch for Генератор продаж (5 ошибок) -->
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="439425" async="async"></script>
<!-- Microdata fix for google search console-->
<?
$arResult["TIMESTAMP_X"] = ConvertDateTime($arResult["TIMESTAMP_X"], "YYYY-MM-DD HH:MI:SS", "ru");
?>
<p style="display:none">Опубликовано <time datetime="<? echo $arResult["TIMESTAMP_X"]; ?>" class="post-date updated" pubdate>
</time>
<span class="vcard author">
 <span class="fn">Генератор Продаж</span>
</span></p>
<!-- Registration banner start -->
<?$APPLICATION->IncludeFile(SITE_DIR."include/components/popups/blog-registration.php", Array(), Array("MODE"=>"php"));?>
<!-- Registration banner END -->