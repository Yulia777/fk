<?php

use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;


class CatalogSmartFilterProperties
{
    const SHOW_HLB_ID = 4;
    const HIDE_HLB_ID = 5;
    const IBLOCK_ID = 17;
    private static $instance = null;
    private static $propertiesHideDefault = array();
    private static $propertiesHide = array();
    private static $propertiesShow = array();

    private function __construct()
    {
        static::$propertiesShow = array();
        static::$propertiesHide = array();
        $hlBlockShow = HL\HighloadBlockTable::getById(self::SHOW_HLB_ID)->fetch();
        $hlBlockHide = HL\HighloadBlockTable::getById(self::HIDE_HLB_ID)->fetch();
        $entityShow = HL\HighloadBlockTable::compileEntity($hlBlockShow);
        $entityHide = HL\HighloadBlockTable::compileEntity($hlBlockHide);
        $entity_data_class_show = $entityShow->getDataClass();
        $entity_data_class_hide = $entityHide->getDataClass();

        $rsDataShow = $entity_data_class_show::getList(array(
            "select" => array("UF_SECTION", "UF_PROPERTIES"),
            "order" => array("UF_SECTION" => "ASC"),
            "filter" => array("UF_ACTIVE"=>"1")
        ));
        $rsDataHide = $entity_data_class_hide::getList(array(
            "select" => array("UF_SECTION", "UF_PROPERTIES"),
            "order" => array("UF_SECTION" => "ASC"),
            "filter" => array("UF_ACTIVE"=>"1")
        ));
        while ($arData = $rsDataShow->Fetch()) {
            static::$propertiesShow[$arData['UF_SECTION']] = $arData['UF_PROPERTIES'];
            foreach ($arData['UF_PROPERTIES'] as $val) {
                static::$propertiesHideDefault[] = $val;
            }
        }
        static::$propertiesHideDefault = $array = array_values(array_unique(static::$propertiesHideDefault));
        while ($arData = $rsDataHide->Fetch()) {
            static::$propertiesHide[$arData['UF_SECTION']] = $arData['UF_PROPERTIES'];
        }
    }

    public static function getInstance(): CatalogSmartFilterProperties
    {
        if (static::$instance == null) {
            static::$instance = new catalogSmartFilterProperties();
        }
        return static::$instance;
    }

    public function getShowProperties(): array
    {
        return static::$propertiesShow;
    }

    public function getHideProperties(): array
    {
        return static::$propertiesHide;
    }

    public function getHideDefaultProperties(): array
    {
        return static::$propertiesHideDefault;
    }

    public function getSectionHideProperties($sectionId): array
    {
        $hideProperties = static::$propertiesHideDefault;
        if (isset(static::$propertiesHide[$sectionId])) {
            $hideProperties = array_unique(array_merge($hideProperties, static::$propertiesHide[$sectionId]));
        }
        foreach ($hideProperties as $key => $val) {
            if (in_array($val, static::$propertiesShow[$sectionId])) {
                unset($hideProperties[$key]);
            }

        }
        $hideProperties = array_values($hideProperties);
        return $hideProperties;
    }

    public function updateSmartFilterPropertiesArray(array $properties): array
    {
        $arVariables = "0";
        $sectionId = null;
        CComponentEngine::ParseComponentPath('/catalog/', array('SECTION_CODE' => '#SECTION_CODE#/'), $arVariables);
        $rsSections = CIBlockSection::GetList(array(), array('IBLOCK_ID' => self::IBLOCK_ID, '=CODE' => $arVariables['SECTION_CODE']));
        if ($arSection = $rsSections->Fetch()) {
            $sectionId = $arSection["ID"];
        }
        if ($sectionId !== null) {
            $hideProperties = static::getInstance()->getSectionHideProperties($sectionId);
            foreach ($hideProperties as $propertyId) {
                if (isset($properties[$propertyId])) {
                    unset($properties[$propertyId]);
                }
            }
        }
        return $properties;
    }
}