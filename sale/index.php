<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции");

global $promoFilter;
$promoFilter = array(
    "ACTIVE"=>"Y",
    "=PROPERTY_123" => array(0 => "52")
);
?>


<?
$APPLICATION->IncludeComponent(
    "compuproject:catalog.sales",
    ".default",
    array(
        "IBLOCK_TYPE" => "aspro_next_catalog",
        "IBLOCK_ID" => "17",
        "FILTER_NAME" => "promoFilter",
        "SEF_FOLDER" => "/sale/"
    )
);
?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>