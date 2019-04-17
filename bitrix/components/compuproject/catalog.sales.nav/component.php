<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arResult["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
$arResult["IBLOCK_ID"] = trim($arParams["IBLOCK_ID"]);
$arResult["FILTER_NAME"] = trim($arParams["FILTER_NAME"]);
$arResult["SEF_FOLDER"] = trim($arParams["SEF_FOLDER"]);
$arResult["SELECT_SECTION_ID"] = trim($arParams["SELECT_SECTION_ID"]);
$filterName = $arResult["FILTER_NAME"];

global ${$filterName};
$sections = array();
$arSelect = Array("IBLOCK_SECTION_ID");
$arFilter = Array("IBLOCK_ID"=>$arResult["IBLOCK_ID"], "ACTIVE"=>"Y");
$arFilter = array_merge ($arFilter, ${$filterName});
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $sectionId = $arFields["IBLOCK_SECTION_ID"];
    if($sectionId !== NULL && $sectionId !== "") {
        $sections_res = CIBlockSection::GetByID($sectionId);
        if($ar_res = $sections_res->GetNext()) {
            $sections[$sectionId]["name"] = $ar_res['NAME'];
            $sections[$sectionId]["code"] = $ar_res['CODE'];
        }
    }
}
$arResult["SECTIONS"] = $sections;

$this->IncludeComponentTemplate();