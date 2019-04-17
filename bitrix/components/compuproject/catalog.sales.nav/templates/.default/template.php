<div class="catalog-sales-nav">
    <ul class="left_menu">
        <?if($arResult["SELECT_SECTION_ID"] == ""):?>
        <li class="current item">
        <?else:?>
        <li class="item">
        <?endif;?>
            <a class="icons_fa" href="<?=$arResult["SEF_FOLDER"]?>">
                <span>Все акционные</span>
            </a>
        </li>
        <?foreach ($arResult["SECTIONS"] as $sectionId => $section):?>
            <?if($arResult["SELECT_SECTION_ID"] == $sectionId):?>
                <li class="current item">
            <?else:?>
                <li class="item">
            <?endif;?>
            <a class="icons_fa" href="<?=$arResult["SEF_FOLDER"]?><?=$section["code"]?>/">
                <span><?=$section["name"]?></span>
            </a>
            </li>
        <?endforeach; ?>
    </ul>
</div>
<!--</div>-->
