<?php
define("CATALOG_IBLOCK", 17);
define("CATALOG_PRICE_TYPE_ID", 1);
define("MARKUP_TYPE_PERCENT", 86);
define("MARKUP_TYPE_FIX", 87);
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

function roundPrice($val, $precision) {
    $k = pow(10, $precision);
    return round($val/$k,0) * $k;
}

function getElementPriceUpdateData($elementId) {
    if(CModule::IncludeModule('iblock') && CModule::IncludeModule("catalog")) {
        $arSort= Array("NAME"=>"ASC");
        $arSelect = Array("ID", "PROPERTY_PURCHASE_PRICE", "PROPERTY_PURCHASE_CURRENCY","PROPERTY_MARKUP", "PROPERTY_MARKUP_TYPE");
        $arFilter = Array("IBLOCK_ID" => CATALOG_IBLOCK,'ID' => $elementId);
        $res =  CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
        while($ob = $res->GetNextElement()){
            $arFields = $ob->GetFields();
            if($arFields['PROPERTY_PURCHASE_PRICE_VALUE'] > 0) {
                if($arFields['PROPERTY_PURCHASE_CURRENCY_VALUE'] != "RUB") {
                    $RUB = CCurrencyRates::ConvertCurrency($arFields['PROPERTY_PURCHASE_PRICE_VALUE'], $arFields['PROPERTY_PURCHASE_CURRENCY_VALUE'], "RUB");
                } else {
                    $RUB = $arFields['PROPERTY_PURCHASE_PRICE_VALUE'];
                }
                if($arFields['PROPERTY_MARKUP_TYPE_ENUM_ID'] == MARKUP_TYPE_FIX) {
                    $RUB += $arFields['PROPERTY_MARKUP_VALUE'];
                } elseif($arFields['PROPERTY_MARKUP_TYPE_ENUM_ID'] == MARKUP_TYPE_PERCENT) {
                    $percent = $arFields['PROPERTY_MARKUP_VALUE']/100;
                    $RUB += ($RUB*$percent);
                }
                $RUB = roundPrice($RUB, 2);
                if($RUB < 100) {
                    $RUB = 100;
                }
                $db_res = CPrice::GetList(
                    array(),
                    array(
                        "PRODUCT_ID" => $elementId,
                        "CATALOG_GROUP_ID" => CATALOG_PRICE_TYPE_ID
                    )
                );
                while($ar_res = $db_res->Fetch())
                {
                    if($ar_res["PRICE"] != $RUB) {
                        return array("ID" => $ar_res["ID"], "PRICE" => $RUB,"CURRENCY" => "RUB");
                    }
                }
            }
        }
    }
    return false;
}

function updateElementPrice($elementId) {
    $data = getElementPriceUpdateData($elementId);
    if($data) {
        \Bitrix\Catalog\Model\Price::update($data["ID"], Array("PRICE" => $data["PRICE"],"CURRENCY" => $data["CURRENCY"]));
    }
}

function updateElementsPrice() {
    if(CModule::IncludeModule("catalog")) {
        $db_res = CPrice::GetList(
            array(),
            array(
                "ELEMENT_IBLOCK_ID" => CATALOG_IBLOCK, //ID инфоблока с товарами
                "CATALOG_GROUP_ID" => CATALOG_PRICE_TYPE_ID, //ID типа цены
            )
        );
        while($ar_res = $db_res->Fetch())
        {
            $data = getElementPriceUpdateData($ar_res['PRODUCT_ID']);
            if($data && $data["PRICE"] != $ar_res["PRICE"]) {
                \Bitrix\Catalog\Model\Price::update($ar_res["ID"], Array("PRICE" => $data["PRICE"],"CURRENCY" => $data["CURRENCY"]));
            }
        }
    }
    return "updateElementsPrice();";
}

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
//AddEventHandler("catalog", "OnBeforePriceAdd", "testOnBeforePriceAdd");
//function testOnBeforePriceAdd(&$arFields) {
//    AddMessage2Log("testOnBeforePriceAdd");
//    AddMessage2Log($arFields);
//}
//AddEventHandler("catalog", "OnBeforePriceAdd", "testOnBeforePriceUpdate");
//function testOnBeforePriceUpdate(&$arFields) {
//    AddMessage2Log("testOnBeforePriceUpdate");
//    AddMessage2Log($arFields);
//}
//AddEventHandler("catalog", "OnPriceAdd", "testOnPriceAdd");
//function testOnPriceAdd(&$arFields) {
//    AddMessage2Log("testOnPriceAdd");
//    AddMessage2Log($arFields);
//}
//AddEventHandler("catalog", "OnPriceUpdate", "testOnPriceUpdate");
//function testOnPriceUpdate(&$arFields) {
//    AddMessage2Log("testOnPriceUpdate");
//    AddMessage2Log($arFields);
//}

