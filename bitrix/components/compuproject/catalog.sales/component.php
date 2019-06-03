<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arResult["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
$arResult["IBLOCK_ID"] = trim($arParams["IBLOCK_ID"]);
$arResult["FILTER_NAME"] = trim($arParams["FILTER_NAME"]);
$arResult["SEF_FOLDER"] = trim($arParams["SEF_FOLDER"]);
$arResult["SECTION_CODE"] = "";
$arResult["SECTION_ID"] = "";

if($_REQUEST['SECTION_CODE'] !== null && $_REQUEST['SECTION_CODE'] !== "") {
    $sectionCode = strstr($_REQUEST['SECTION_CODE'], '/', true);
    $arFilter = array("CODE"=>$sectionCode);
    $arSelect = array("ID");
    $rsSections = CIBlockSection::GetList(Array("SORT"=>"ASC"),$arFilter,false,$arSelect,false);
    while ($arSection = $rsSections->Fetch())
    {
        $arResult["SECTION_CODE"] = $sectionCode;
        $arResult["SECTION_ID"] = $arSection["ID"];
    }
}


$this->IncludeComponentTemplate();