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
    <article class="article blog__item" itemprop="articleBody">
        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
            <h1 itemprop="headline"><?=$arResult["NAME"]?></h1>
        <?endif;?>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
            <?$detailImage = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], array('width'=>'680', 'height'=>'340'), BX_RESIZE_IMAGE_EXACT, true);?>
            <img
                    itemprop="image url"
                    class="detail-image"
                    border="0"
                    src="<?= $detailImage["src"] ?>"
                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
            />
        <?endif?>
        <div class="social-likes social-likes_visible social-likes_ready">
            <div class="social-likes__widget social-likes__widget_facebook" title="Поделиться ссылкой на Фейсбуке"><a class="js-fb" href="https://www.facebook.com/sharer.php?src=sp&u=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&picture=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank" ><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_twitter" title="Поделиться ссылкой в Твиттере"><a class="js-twitter" href="http://twitter.com/share?text=<?=$arResult['NAME'];?>.<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>" target="_blank"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span></a></div>
            <div class="social-likes__widget social-likes__widget_vkontakte" title="Поделиться ссылкой во Вконтакте"><a class="js-vk" href="https://vk.com/share.php?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&image=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2" target="_blank"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"></span>Вконтакте</span><span class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_odnoklassniki" title="Поделиться ссылкой в Одноклассниках"><a class="js-ok" target="_blank" href="https://connect.ok.ru/offer?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&title=<?=$arResult['NAME'];?>&description=<?=$arResult['META_DESCRIPTION']["ELEMENT_META_DESCRIPTION"];?>&imageUrl=<?='https://sales-generator.ru'.$arResult["DETAIL_PICTURE"]["SRC"];?>&utm_source=share2"><span class="social-likes__button social-likes__button_odnoklassniki"><span class="social-likes__icon social-likes__icon_odnoklassniki"></span>Одноклассники</span><span class="social-likes__counter social-likes__counter_odnoklassniki social-likes__counter_empty"></span></a></div>
            <div class="social-likes__widget social-likes__widget_plusone" title="Поделиться ссылкой в Гугл-плюсе"><a href="https://plus.google.com/share?url=https%3A%2F%2Fsales-generator.ru<?=$arResult["DETAIL_PAGE_URL"]?>&utm_source=share2" class="js-gpl" target="_blank"><span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"></span>Google+</span><span class="social-likes__counter social-likes__counter_plusone social-likes__counter_empty"></span></a></div>
        </div>
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

            <!--Категории статей-->
            <?$APPLICATION->IncludeFile(SITE_DIR."/include/components/article/sidebar_categories.php", Array(), Array("MODE"=>"php"));?>
    </aside>

</section>

<?
$arResult["TIMESTAMP_X"] = ConvertDateTime($arResult["TIMESTAMP_X"], "YYYY-MM-DD HH:MI:SS", "ru");
?>
<p style="display:none">Опубликовано <time datetime="<? echo $arResult["TIMESTAMP_X"]; ?>" class="post-date updated" pubdate>
</time>
    <style>
        .right-menu-md {
            display:none!important;
        }
    </style>