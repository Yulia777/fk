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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>

<div class="blog">
    <div class="blog__item">
        <section class="articles-list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <article class="articles-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                        <?php $preview_image = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>200, 'height'=>135), BX_RESIZE_IMAGE_EXACT, false);?>
                        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                            <a class="item-preview-image" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <img
                                        border="0"
                                        src="<?=$preview_image["src"]?>"
                                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                />
                            </a>
                        <?else:?>
                            <img
                                    class="item-preview-image"
                                    border="0"
                                    src="<?=$preview_image["src"]?>"
                                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            />
                        <?endif;?>
                    <?endif?>
                    <div class="item-preview-description">
                        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                <a class="item-title" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
                            <?else:?>
                                <b><?echo $arItem["NAME"]?></b><br />
                            <?endif;?>
                        <?endif;?>
                        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <p class="content-text"><?echo TruncateText($arItem["PREVIEW_TEXT"], 150);?></p>
                        <?endif;?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"];?>" class="button button--experts">Подробнее</a>
                    </div>
                </article>
            <?endforeach;?>
        </section>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
    <aside class="blog__sidebar blog__item">
        <a href="/sale/"
           target="_blank"
           class="js-sliding-sidebar">
            <img src="/bitrix/templates/aspro_next/images/sidebar-sale.jpg" alt="">
            <!--<button type="button" class="button blog__sidebar--btn">Узнать как</button>-->
        </a>
        <!--Категории статей-->
        <?$APPLICATION->IncludeFile(SITE_DIR."/include/components/article/sidebar_categories.php", Array(), Array("MODE"=>"php"));?>
    </aside>
    <!--<div class="blog__item" class="fly-images--right">
        <img class="sidebar-fixed js-fly-images--right" src="/images/sidear/bf.png"
             onclick="yaCounter44418460.reachGoal('black-friday'); return true;"/>
    </div>-->
</div>
<style>
    .right-menu-md {
        display:none!important;
    }
</style>