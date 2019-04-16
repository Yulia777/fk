<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?$this->setFrameMode(true);?>
<?
global $arTheme;
$iVisibleItemsMenu = ($arTheme['MAX_VISIBLE_ITEMS_MENU']['VALUE'] ? $arTheme['MAX_VISIBLE_ITEMS_MENU']['VALUE'] : 10);
?>
<?if($arResult):?>
	<!--<div class="table-menu">
		<table>
			<tr>
				<?/*foreach($arResult as $arItem):*/?>
					<?/*$bShowChilds = $arParams["MAX_LEVEL"] > 1;
					$bWideMenu = (isset($arItem['PARAMS']['CLASS']) && strpos($arItem['PARAMS']['CLASS'], 'wide_menu') !== false);*/?>
					<td class="menu-item unvisible <?/*=($arItem["CHILD"] ? "dropdown" : "")*/?> <?/*=(isset($arItem["PARAMS"]["CLASS"]) ? $arItem["PARAMS"]["CLASS"] : "");*/?>  <?/*=($arItem["SELECTED"] ? "active" : "")*/?>">
						<div class="wrap">
							<a class="<?/*=($arItem["CHILD"] && $bShowChilds ? "dropdown-toggle" : "")*/?>" href="<?/*=$arItem["LINK"]*/?>">
								<div>
									<?/*=$arItem["TEXT"]*/?>
									<div class="line-wrapper"><span class="line"></span></div>
								</div>
							</a>
							<?/*if($arItem["CHILD"] && $bShowChilds):*/?>
								<span class="tail"></span>
								<ul class="dropdown-menu">
									<?/*foreach($arItem["CHILD"] as $arSubItem):*/?>
										<?/*$bShowChilds = $arParams["MAX_LEVEL"] > 2;*/?>
										<?/*$bHasPicture = (isset($arSubItem['PARAMS']['PICTURE']) && $arSubItem['PARAMS']['PICTURE'] && $arTheme['SHOW_CATALOG_SECTIONS_ICONS']['VALUE'] == 'Y');*/?>
										<li class="<?/*=($arSubItem["CHILD"] && $bShowChilds ? "dropdown-submenu" : "")*/?> <?/*=($arSubItem["SELECTED"] ? "active" : "")*/?> <?/*=($bHasPicture ? "has_img" : "")*/?>">
											<?/*if($bHasPicture && $bWideMenu):
												$arImg = CFile::ResizeImageGet($arSubItem['PARAMS']['PICTURE'], array('width' => 60, 'height' => 60), BX_RESIZE_PROPORTIONAL_ALT);
												if(is_array($arImg)):*/?>
													<div class="menu_img"><img src="<?/*=$arImg["src"]*/?>" alt="<?/*=$arSubItem["TEXT"]*/?>" title="<?/*=$arSubItem["TEXT"]*/?>" /></div>
												<?/*endif;*/?>
											<?/*endif;*/?>
											<a href="<?/*=$arSubItem["LINK"]*/?>" title="<?/*=$arSubItem["TEXT"]*/?>"><span class="name"><?/*=$arSubItem["TEXT"]*/?></span><?/*=($arSubItem["CHILD"] && $bShowChilds ? '<span class="arrow"><i></i></span>' : '')*/?></a>
											<?/*if($arSubItem["CHILD"] && $bShowChilds):*/?>
												<?/*$iCountChilds = count($arSubItem["CHILD"]);*/?>
												<ul class="dropdown-menu toggle_menu">
													<?/*foreach($arSubItem["CHILD"] as $key => $arSubSubItem):*/?>
														<?/*$bShowChilds = $arParams["MAX_LEVEL"] > 3;*/?>
														<li class="menu-item <?/*=(++$key > $iVisibleItemsMenu ? 'collapsed' : '');*/?> <?/*=($arSubSubItem["CHILD"] && $bShowChilds ? "dropdown-submenu" : "")*/?> <?/*=($arSubSubItem["SELECTED"] ? "active" : "")*/?>">
															<a href="<?/*=$arSubSubItem["LINK"]*/?>" title="<?/*=$arSubSubItem["TEXT"]*/?>"><span class="name"><?/*=$arSubSubItem["TEXT"]*/?></span></a>
															<?/*if($arSubSubItem["CHILD"] && $bShowChilds):*/?>
																<ul class="dropdown-menu">
																	<?/*foreach($arSubSubItem["CHILD"] as $arSubSubSubItem):*/?>
																		<li class="menu-item <?/*=($arSubSubSubItem["SELECTED"] ? "active" : "")*/?>">
																			<a href="<?/*=$arSubSubSubItem["LINK"]*/?>" title="<?/*=$arSubSubSubItem["TEXT"]*/?>"><span class="name"><?/*=$arSubSubSubItem["TEXT"]*/?></span></a>
																		</li>
																	<?/*endforeach;*/?>
																</ul>

															<?/*endif;*/?>
														</li>
													<?/*endforeach;*/?>
													<?/*if($iCountChilds > $iVisibleItemsMenu && $bWideMenu):*/?>
														<li><span class="colored more_items with_dropdown"><?/*=\Bitrix\Main\Localization\Loc::getMessage("S_MORE_ITEMS");*/?></span></li>
													<?/*endif;*/?>
												</ul>
											<?/*endif;*/?>
										</li>
									<?/*endforeach;*/?>
								</ul>
							<?/*endif;*/?>
						</div>
					</td>
				<?/*endforeach;*/?>

				<td class="menu-item dropdown js-dropdown nosave unvisible">
					<div class="wrap">
						<a class="dropdown-toggle more-items" href="#">
							<span><?/*=\Bitrix\Main\Localization\Loc::getMessage("S_MORE_ITEMS");*/?></span>
						</a>
						<span class="tail"></span>
						<ul class="dropdown-menu"></ul>
					</div>
				</td>

			</tr>
		</table>
	</div>-->
    <div class="table-menu">
        <table>
            <tbody><tr>
                <td class="menu-item dropdown catalog wide_menu" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/catalog/">
                            <div>
                                Каталог									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="<?=SITE_TEMPLATE_PATH?>/images/menu/ventilation.jpg" style="width:60px" alt="Вентиляция" title="Вентиляция"></div>
                                <a href="/vent/" title="Вентиляция"><span class="name">Вентиляция</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/vent/ventilyatory/" title="Вентиляторы"><span class="name">Вентиляторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/ventilyatsionnye_ustanovki/" title="Вентиляционные установки"><span class="name">Вентиляционные установки</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/kanalnye_nagrevateli/" title="Канальные нагреватели"><span class="name">Канальные нагреватели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/okhladiteli/" title="Охладители"><span class="name">Охладители</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/protivoudarnye_klapana/" title="Противоударные клапана"><span class="name">Противоударные клапана</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/rekuperatory/" title="Рекуператоры"><span class="name">Рекуператоры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/smesitelnye_uzly/" title="Смесительные узлы"><span class="name">Смесительные узлы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/vent/elektroprivody/" title="Электроприводы"><span class="name">Электроприводы</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="<?=SITE_TEMPLATE_PATH?>/images/menu/conditioners.jpg" alt="Кондиционеры" title="Кондиционеры"></div>
                                <a href="/konditsionery/" title="Кондиционеры"><span class="name">Кондиционеры</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/kanalnye-kondicionery/" title="Канальные кондиционеры"><span class="name">Канальные кондиционеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/kassetnye-kondicionery/" title="Кассетные кондиционеры"><span class="name">Кассетные кондиционеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/kolonnye_konditsionery/" title="Колонные кондиционеры"><span class="name">Колонные кондиционеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/mobilnye_konditsionery/" title="Мобильные кондиционеры"><span class="name">Мобильные кондиционеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/multi-split-cistemy/" title="Мульти-сплит системы"><span class="name">Мульти-сплит системы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/napolno-potolochnye/" title="Напольно-потолочные кондиционеры"><span class="name">Напольно-потолочные кондиционеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/konditsionery/nastennye-kondicionery/" title="Настенные кондиционеры"><span class="name">Настенные кондиционеры</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="<?=SITE_TEMPLATE_PATH?>/images/menu/heating.jpg" alt="Отопление" title="Отопление"></div>
                                <a href="/otoplenie/" title="Отопление"><span class="name">Отопление</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/vodonagrevateli-otoplenie/" title="Водонагреватели"><span class="name">Водонагреватели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/infrakrasnye_obogrevateli/" title="Инфракрасные обогреватели"><span class="name">Инфракрасные обогреватели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/kaminy/" title="Камины"><span class="name">Камины</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/konvektory/" title="Конвекторы"><span class="name">Конвекторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/kotly/" title="Котлы"><span class="name">Котлы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/maslyanye_obogrevateli/" title="Масляные обогреватели"><span class="name">Масляные обогреватели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/teplovye_zavesy/" title="Тепловые завесы"><span class="name">Тепловые завесы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/otoplenie/teplovye_pushki/" title="Тепловые пушки"><span class="name">Тепловые пушки</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="<?=SITE_TEMPLATE_PATH?>/images/menu/microclimate.jpg" alt="Микроклимат" title="Микроклимат"></div>
                                <a href="/microclima/" title="Микроклимат"><span class="name">Микроклимат</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/microclima/moyki_vozdukha/" title="Мойки воздуха"><span class="name">Мойки воздуха</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/microclima/osushiteli_vozdukha/" title="Осушители воздуха"><span class="name">Осушители воздуха</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/microclima/ochistiteli_vozdukha/" title="Очистители воздуха"><span class="name">Очистители воздуха</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/microclima/uvlazhniteli_vozdukha/" title="Увлажнители воздуха"><span class="name">Увлажнители воздуха</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="<?=SITE_TEMPLATE_PATH?>/images/menu/sun-energy.jpg" alt="Солнечная энергия" title="Солнечная энергия"></div>
                                <a href="/solnechnaya_energiya/" title="Солнечная энергия"><span class="name">Солнечная энергия</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/solnechnaya_energiya/vakuumnye_solnechnye_kollektory/" title="Вакуумные солнечные коллекторы"><span class="name">Вакуумные солнечные коллекторы</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/a5f/60_60_1/a5fb65ed580489e637b6dfdfdf92aee7.png" alt="Настенные кондиционеры" title="Настенные кондиционеры"></div>
                                <a href="/nastennye_konditsionery/" title="Настенные кондиционеры"><span class="name">Настенные кондиционеры</span></a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td class="menu-item" style="visibility: visible;">
                    <div class="wrap">
                        <a class="" href="/sale/">
                            <div>
                                Акции									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                    </div>
                </td>
                <td class="menu-item dropdown" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/services/">
                            <div>
                                Услуги									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu">
                            <li class="  ">
                                <a href="/services/ustanovka-i-nastroyka-bytovoy-tekhniki/" title="Установка и настройка бытовой техники"><span class="name">Установка и настройка бытовой техники</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/ustanovka-santekhniki/" title="Установка сантехники"><span class="name">Установка сантехники</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/strakhovanie-pokupki/" title="Страхование покупки"><span class="name">Страхование покупки</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/nastroyka-kompyutera/" title="Настройка компьютера"><span class="name">Настройка компьютера</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/naryazhaem-elki-na-domu/" title="Наряжаем елки на дому"><span class="name">Наряжаем елки на дому</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/ustanovka-avtomobilnoy-tekhniki/" title="Установка автомобильной техники"><span class="name">Установка автомобильной техники</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/elektromontazhnye-raboty/" title="Электромонтажные работы"><span class="name">Электромонтажные работы</span></a>
                            </li>
                            <li class="  ">
                                <a href="/services/anons/" title="Услуги"><span class="name">Услуги</span></a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td class="menu-item" style="visibility: visible;">
                    <div class="wrap">
                        <a class="" href="/blog/">
                            <div>
                                Блог									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                    </div>
                </td>
                <td class="menu-item" style="visibility: visible;">
                    <div class="wrap">
                        <a class="" href="/projects/">
                            <div>
                                Проекты									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                    </div>
                </td>
                <td class="menu-item dropdown" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/help/">
                            <div>
                                Как купить									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu">
                            <li class="  ">
                                <a href="/help/payment/" title="Условия оплаты"><span class="name">Условия оплаты</span></a>
                            </li>
                            <li class="  ">
                                <a href="/help/delivery/" title="Условия доставки"><span class="name">Условия доставки</span></a>
                            </li>
                            <li class="  ">
                                <a href="/help/warranty/" title="Гарантия на товар"><span class="name">Гарантия на товар</span></a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td class="menu-item dropdown" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/company/">
                            <div>
                                О компании									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu" id="menu-company">
                            <li class="  ">
                                <a href="/company/index.php/#sertificati/" title="Сертификаты"><span class="name">Сертификаты</span></a>
                            </li>
                            <li class="  ">
                                <a href="/company/index.php/#otzivi/" title="Отзывы"><span class="name">Отзывы</span></a>
                            </li>
                            <li class="  ">
                                <a href="/company/index.php/#nam-doveriaut/" title="Нам доверяют"><span class="name">Нам доверяют</span></a>
                            </li>
                            <li class="  ">
                                <a href="/company/index.php/#napisat-directory/" title="Написать директору"><span class="name">Написать директору</span></a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td class="menu-item dropdown" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/clients/">
                            <div>
                                Для клиентов									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu" id="menu-company">
                            <li class="  ">
                                <a href="/clients/index.php/#delivery/" title="Доставка"><span class="name">Доставка</span></a>
                            </li>
                            <li class="  ">
                                <a href="/clients/index.php/#pay/" title="Оплата"><span class="name">Оплата</span></a>
                            </li>
                            <li class="  ">
                                <a href="/clients/index.php/#return/" title="Возврат"><span class="name">Возврат</span></a>
                            </li>
                            <li class="  ">
                                <a href="/clients/index.php/#reviews/" title="Отзывы"><span class="name">Отзывы</span></a>
                            </li>
                            <li class="  ">
                                <a href="/clients/index.php/#quests/" title="Вопрос-ответ"><span class="name">Вопрос-ответ</span></a>
                            </li>

                        </ul>
                    </div>
                </td>
                <td class="menu-item" style="visibility: visible;">
                    <div class="wrap">
                        <a class="" href="/contacts/">
                            <div>
                                Контакты									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                    </div>
                </td>

                <td class="menu-item dropdown js-dropdown nosave" style="display: none; visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle more-items" href="#">
                            <span>Ещё</span>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu"></ul>
                    </div>
                </td>

            </tr>
            </tbody></table>
    </div>
<?endif;?>