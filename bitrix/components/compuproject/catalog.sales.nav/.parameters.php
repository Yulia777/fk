<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    'PARAMETERS' => array(
        'IBLOCK_TYPE' => array(
            'NAME' => "Тип инфоблока",
            'TYPE' => 'TEXT',
            'DEFAULT' => "",
        ),
        'IBLOCK_ID' => array(
            'NAME' => "ID инфоблока",
            'TYPE' => 'TEXT',
            'DEFAULT' => "",
        ),
        'FILTER_NAME' => array(
            'NAME' => "Имя фильтра",
            'TYPE' => 'TEXT',
            'DEFAULT' => "promoFilter",
        ),
        'SEF_FOLDER' => array(
            'NAME' => "корневой каталог",
            'TYPE' => 'TEXT',
            'DEFAULT' => "",
        ),
        'SELECT_SECTION_ID' => array(
            'NAME' => "выделенная секция",
            'TYPE' => 'TEXT',
            'DEFAULT' => "",
        ),
    )
);