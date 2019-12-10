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

<?CNext::AddMeta(
    array(
		'og:image' => ( $arResult['DETAIL_PICTURE'] ? $arResult['DETAIL_PICTURE']["SRC"] : false),
    )
);?>

<?
$currUrl = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$dataSchema = array(
        '@context' => 'http://www.schema.org',
        '@type' => 'NewsArticle',
        'url' => $currUrl,
        'publisher' => array(
                '@type' => 'Organization',
                'name' => 'Формула климата',
                'logo' => array(
                            '@type' => 'ImageObject',
                            'image' => '/upload/CNext/ef9/ef90a15558d51d472281839fb237f24b.png',
                            'url' => '/upload/CNext/ef9/ef90a15558d51d472281839fb237f24b.png'
                            )
                ),
        'headline' => $arResult['NAME'],
        'mainEntityOfPage' => $currUrl,
        'articleBody' => strip_tags($arResult["DETAIL_TEXT"]),
        'image' => $arResult["DETAIL_PICTURE"]["SRC"],
        'author' => 'Формула климата',
        'datePublished' => ConvertDateTime($arResult["ACTIVE_FROM"], "YYYY-MM-DD HH:MI:SS", "ru"),
        'dateModified' => ConvertDateTime($arResult["TIMESTAMP_X"], "YYYY-MM-DD HH:MI:SS", "ru"),
    );

$jsonSchema = json_encode($dataSchema,JSON_UNESCAPED_UNICODE);
?>


<script type='application/ld+json'>
  <?=$jsonSchema;?>
</script>

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
        <div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04"
             data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>
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