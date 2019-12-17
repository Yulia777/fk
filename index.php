<?
//Cleantalk/top_code/start
	require_once( getcwd() . '/cleantalk/cleantalk.php');
//Cleantalk/top_code/end
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("viewed_show", "Y");
$APPLICATION->SetTitle("Формула Климата - кондиционеры и вентиляция в Рязани");
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?php
//Cleantalk/bottom_code/start
	ob_end_flush();
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		die();
	}
//Cleantalk/bottom_code/end