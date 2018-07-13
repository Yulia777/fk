<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("iblock")) return;

if(!defined("WIZARD_SITE_ID")) return;
if(!defined("WIZARD_SITE_DIR")) return;
if(!defined("WIZARD_SITE_PATH")) return;
if(!defined("WIZARD_TEMPLATE_ID")) return;
if(!defined("WIZARD_TEMPLATE_ABSOLUTE_PATH")) return;
if(!defined("WIZARD_THEME_ID")) return;

// iblock user fields
$dbSite = CSite::GetByID(WIZARD_SITE_ID);
if($arSite = $dbSite -> Fetch()) $lang = $arSite["LANGUAGE_ID"];
if(!strlen($lang)) $lang = "ru";
WizardServices::IncludeServiceLang("errors_updates", $lang);

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"].BX_PERSONAL_ROOT."/templates/".WIZARD_TEMPLATE_ID."/";
//$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"]."/local/templates/".WIZARD_TEMPLATE_ID."/";

if(isset($_SESSION["NEXT_CATALOG_ID"]) && $_SESSION["NEXT_CATALOG_ID"])
	\Bitrix\Main\Config\Option::set("aspro.next", "CATALOG_IBLOCK_ID", $_SESSION["NEXT_CATALOG_ID"], WIZARD_SITE_ID);
\Bitrix\Main\Config\Option::set("aspro.next", "MAX_DEPTH_MENU", 4, WIZARD_SITE_ID);
\Bitrix\Main\Config\Option::set("aspro.next", "REGIONALITY_FILTER_ITEM", "Y", WIZARD_SITE_ID);

$catalogIBlockID = CNextCache::$arIBlocks[WIZARD_SITE_ID]["aspro_next_catalog"]["aspro_next_catalog"][0];
$arUserFieldViewType = CUserTypeEntity::GetList(array(), array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION", "FIELD_NAME" => "UF_OFFERS_TYPE"))->Fetch();
if(!$arUserFieldViewType)
{
	$arFields = array(
		"FIELD_NAME" => "UF_OFFERS_TYPE",
		"USER_TYPE_ID" => "enumeration",
		"XML_ID" => "UF_OFFERS_TYPE",
		"SORT" => 100,
		"MULTIPLE" => "N",
		"MANDATORY" => "N",
		"SHOW_FILTER" => "N",
		"SHOW_IN_LIST" => "Y",
		"EDIT_IN_LIST" => "Y",
		"IS_SEARCHABLE" => "N",
		"SETTINGS" => array(
			"DISPLAY" => "LIST",
			"LIST_HEIGHT" => 5,
		)
	);
	$arLangs = array(
		"EDIT_FORM_LABEL" => array(
			"ru" => GetMessage("OFFERS_TYPE"),
			"en" => "Offers type",
		),
		"LIST_COLUMN_LABEL" => array(
			"ru" => GetMessage("OFFERS_TYPE"),
			"en" => "Offers type",
		)
	);

	$ob = new CUserTypeEntity();
	$FIELD_ID = $ob->Add(array_merge($arFields, array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION"), $arLangs));
	if($FIELD_ID)
	{
		$obEnum = new CUserFieldEnum;
		$obEnum->SetEnumValues($FIELD_ID, array(
			"n0" => array(
				"VALUE" => 1,
				"XML_ID" => "TYPE_1",
			),
			"n1" => array(
				"VALUE" => 2,
				"XML_ID" => "TYPE_2",
			),
		));
	}
}

//catalog detail type
$arUserFieldViewType = CUserTypeEntity::GetList(array(), array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION", "FIELD_NAME" => "UF_ELEMENT_DETAIL"))->Fetch();
if(!$arUserFieldViewType)
{
	$arFields = array(
		"FIELD_NAME" => "UF_ELEMENT_DETAIL",
		"USER_TYPE_ID" => "enumeration",
		"XML_ID" => "UF_ELEMENT_DETAIL",
		"SORT" => 100,
		"MULTIPLE" => "N",
		"MANDATORY" => "N",
		"SHOW_FILTER" => "N",
		"SHOW_IN_LIST" => "Y",
		"EDIT_IN_LIST" => "Y",
		"IS_SEARCHABLE" => "N",
		"SETTINGS" => array(
			"DISPLAY" => "LIST",
			"LIST_HEIGHT" => 5,
		)
	);
	$arLangs = array(
		"EDIT_FORM_LABEL" => array(
			"ru" => GetMessage("CATALOG_DETAIL_TYPE"),
			"en" => "Catalog detail type",
		),
		"LIST_COLUMN_LABEL" => array(
			"ru" => GetMessage("CATALOG_DETAIL_TYPE"),
			"en" => "Catalog detail type",
		)
	);

	$ob = new CUserTypeEntity();
	$FIELD_ID = $ob->Add(array_merge($arFields, array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION"), $arLangs));
	if($FIELD_ID)
	{
		$obEnum = new CUserFieldEnum;
		$obEnum->SetEnumValues($FIELD_ID, array(
			"n0" => array(
				"VALUE" => GetMessage("CATALOG_DETAIL_TYPE1"),
				"XML_ID" => "element_1",
			),
			"n1" => array(
				"VALUE" => GetMessage("CATALOG_DETAIL_TYPE2"),
				"XML_ID" => "element_2",
			),
			"n2" => array(
				"VALUE" => GetMessage("CATALOG_DETAIL_TYPE3"),
				"XML_ID" => "element_3",
			),
			"n3" => array(
				"VALUE" => GetMessage("CATALOG_DETAIL_TYPE4"),
				"XML_ID" => "element_4",
			),
			"n4" => array(
				"VALUE" => GetMessage("CATALOG_DETAIL_TYPE5"),
				"XML_ID" => "element_5",
			),
		));
	}
}

//table sizes
$arUserFieldViewType = CUserTypeEntity::GetList(array(), array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION", "FIELD_NAME" => "UF_TABLE_SIZES"))->Fetch();
if(!$arUserFieldViewType)
{
	$arFields = array(
		"FIELD_NAME" => "UF_TABLE_SIZES",
		"USER_TYPE_ID" => "enumeration",
		"XML_ID" => "UF_TABLE_SIZES",
		"SORT" => 100,
		"MULTIPLE" => "N",
		"MANDATORY" => "N",
		"SHOW_FILTER" => "N",
		"SHOW_IN_LIST" => "Y",
		"EDIT_IN_LIST" => "Y",
		"IS_SEARCHABLE" => "N",
		"SETTINGS" => array(
			"DISPLAY" => "LIST",
			"LIST_HEIGHT" => 5,
		)
	);
	$arLangs = array(
		"EDIT_FORM_LABEL" => array(
			"ru" => GetMessage("TABLE_SIZES"),
			"en" => "Table sizes",
		),
		"LIST_COLUMN_LABEL" => array(
			"ru" => GetMessage("TABLE_SIZES"),
			"en" => "Table sizes",
		)
	);

	$ob = new CUserTypeEntity();
	$FIELD_ID = $ob->Add(array_merge($arFields, array("ENTITY_ID" => "IBLOCK_".$catalogIBlockID."_SECTION"), $arLangs));
	if($FIELD_ID)
	{
		$obEnum = new CUserFieldEnum;
		$obEnum->SetEnumValues($FIELD_ID, array(
			"n0" => array(
				"VALUE" => GetMessage("TABLE_SIZES1"),
				"XML_ID" => "CLOTHES",
			),
			"n1" => array(
				"VALUE" => GetMessage("TABLE_SIZES2"),
				"XML_ID" => "SHOES",
			),
		));
	}
}

unset($_SESSION['CATALOG_COMPARE_LIST']['NEXT_CATALOG_ID']);
unset($_SESSION['ASPRO_BASKET_COUNTERS']);
?>