<?php
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", "createElementCode");
function createElementCode(&$arFields) {
    if($arFields["IBLOCK_ID"] == "17") {
        $elementCode = str_pad($arFields['ID'], 6, '0', STR_PAD_LEFT);

        reset($arFields["PROPERTY_VALUES"][284]);
        reset($arFields["PROPERTY_VALUES"][229]);
        $arFields["PROPERTY_VALUES"][284][key($arFields["PROPERTY_VALUES"][284])]["VALUE"] = $elementCode;
        $arFields["PROPERTY_VALUES"][229][key($arFields["PROPERTY_VALUES"][229])]["VALUE"] = $elementCode;
    }
}