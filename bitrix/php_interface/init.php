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

function updateElementsArticle() {
    if(CModule::IncludeModule("iblock")) {
        $elements = CIBlockElement::GetList (
            Array("ID" => "ASC"),
            Array("IBLOCK_ID" => CATALOG_IBLOCK,"ACTIVE" => "Y"),
            false,
            false,
            Array('ID','PROPERTY_EL_CODE')
        );
        while($element= $elements->GetNext())
        {
            $elementCode = str_pad($element['ID'], 6, '0', STR_PAD_LEFT);
            if(!isset($element['PROPERTY_EL_CODE_VALUE']) || $element['PROPERTY_EL_CODE_VALUE'] != $elementCode) {
                CIBlockElement::SetPropertyValues($element['ID'], CATALOG_IBLOCK, $elementCode, "EL_CODE");
            }
        }
    }
    return "updateElementsArticle();";
}



//-- Добавление обработчика события

AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");

//-- Собственно обработчик события

function bxModifySaleMails($orderID, &$eventName, &$arFields)
{
  $arOrder = CSaleOrder::GetByID($orderID);
  
  //-- получаем телефоны и адрес
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);
  $phone="";
  $index = ""; 
  $country_name = "";
  $city_name = "";  
  $address = "";
  while ($arProps = $order_props->Fetch())
  {
    if ($arProps["CODE"] == "PHONE")
    {
       $phone = htmlspecialchars($arProps["VALUE"]);
    }
    if ($arProps["CODE"] == "LOCATION")
    {
        $arLocs = CSaleLocation::GetByID($arProps["VALUE"]);
        $country_name =  $arLocs["COUNTRY_NAME_ORIG"];
        $city_name = $arLocs["CITY_NAME_ORIG"];
    }

    if ($arProps["CODE"] == "INDEX")
    {
      $index = $arProps["VALUE"];   
    }

    if ($arProps["CODE"] == "ADDRESS")
    {
      $address = $arProps["VALUE"];
    }
  }

  $full_address = $index.", ".$country_name."-".$city_name.", ".$address;

  //-- получаем название службы доставки
  $arDeliv = CSaleDelivery::GetByID($arOrder["DELIVERY_ID"]);
  $delivery_name = "";
  if ($arDeliv)
  {
    $delivery_name = $arDeliv["NAME"];
  }

  //-- получаем название платежной системы   
  $arPaySystem = CSalePaySystem::GetByID($arOrder["PAY_SYSTEM_ID"]);
  $pay_system_name = "";
  if ($arPaySystem)
  {
    $pay_system_name = $arPaySystem["NAME"];
  }

  //-- добавляем новые поля в массив результатов
  $arFields["ORDER_DESCRIPTION"] = $arOrder["USER_DESCRIPTION"]; 
  $arFields["PHONE"] =  $phone;
  $arFields["DELIVERY_NAME"] =  $delivery_name;
  $arFields["PAY_SYSTEM_NAME"] =  $pay_system_name;
  $arFields["FULL_ADDRESS"] = $full_address;   
}
