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
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/26a/60_60_1/26acd576b1b85498a1f576c697554d12.png" alt="Автоэлектроника" title="Автоэлектроника"></div>
                                <a href="/avtoelektronika/" title="Автоэлектроника"><span class="name">Автоэлектроника</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/avtoelektronika/gps_navigatory/" title="GPS-навигаторы"><span class="name">GPS-навигаторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/avtoelektronika/videoregistratory/" title="Видеорегистраторы"><span class="name">Видеорегистраторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/avtoelektronika/magnitoly/" title="Магнитолы"><span class="name">Магнитолы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/avtoelektronika/akustika/" title="Акустика"><span class="name">Акустика</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/avtoelektronika/radary_detektory/" title="Радары-детекторы"><span class="name">Радары-детекторы</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/837/60_60_1/83727d20d955df4e9d969ef0fefeed37.png" alt="Бытовая техника" title="Бытовая техника"></div>
                                <a href="/bytovaya_tekhnika/" title="Бытовая техника"><span class="name">Бытовая техника</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/bytovaya_tekhnika/kholodilniki/" title="Холодильники"><span class="name">Холодильники</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/bytovaya_tekhnika/vodonagrevateli/" title="Водонагреватели"><span class="name">Водонагреватели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/bytovaya_tekhnika/mikrovolnovye_pechi/" title="Микроволновые печи"><span class="name">Микроволновые печи</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/789/60_60_1/789845cbe923ea97da2a7cb03b9b88eb.png" alt="Напольные покрытия" title="Напольные покрытия"></div>
                                <a href="/napolnye_pokrytiya/" title="Напольные покрытия"><span class="name">Напольные покрытия</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/napolnye_pokrytiya/laminat/" title="Ламинат"><span class="name">Ламинат</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/napolnye_pokrytiya/parketnaya_doska/" title="Паркетная доска"><span class="name">Паркетная доска</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/napolnye_pokrytiya/plitka/" title="Плитка"><span class="name">Плитка</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/napolnye_pokrytiya/podlozhki_osnovaniya/" title="Подложки, основания"><span class="name">Подложки, основания</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/ff5/60_60_1/ff579b15a2464d1e686f21ea925836d6.png" alt="Садовая техника" title="Садовая техника"></div>
                                <a href="/sadovaya_tekhnika/" title="Садовая техника"><span class="name">Садовая техника</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/csadovaya_tekhnika/kultivatory/" title="Культиваторы"><span class="name">Культиваторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/sadovaya_tekhnika/motobloki/" title="Мотоблоки"><span class="name">Мотоблоки</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/2f3/60_60_1/2f3ea526c46d94c9a69ddac19ce78546.png" alt="Сантехника" title="Сантехника"></div>
                                <a href="/santekhnika/" title="Сантехника"><span class="name">Сантехника</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/santekhnika/vanny/" title="Ванны"><span class="name">Ванны</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/santekhnika/dushevye_kabiny/" title="Душевые кабины"><span class="name">Душевые кабины</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/santekhnika/rakoviny_umyvalniki/" title="Раковины, умывальники"><span class="name">Раковины, умывальники</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/santekhnika/smesiteli/" title="Смесители"><span class="name">Смесители</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/santekhnika/unitazy/" title="Унитазы"><span class="name">Унитазы</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/b20/60_60_1/b2002c5616aaf3e354ee0fc519713e15.png" alt="Строительные материалы" title="Строительные материалы"></div>
                                <a href="/stroitelnye_materialy/" title="Строительные материалы"><span class="name">Строительные материалы</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/stroitelnye_materialy/klei/" title="Клеи"><span class="name">Клеи</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/stroitelnye_materialy/lakokrasochnye_materialy/" title="Лакокрасочные материалы"><span class="name">Лакокрасочные материалы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/stroitelnye_materialy/sukhie_stroitelnye_smesi/" title="Сухие строительные смеси"><span class="name">Сухие строительные смеси</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/c96/60_60_1/c96fe995142bdfee8f02142778090be8.png" alt="Фото и видео" title="Фото и видео"></div>
                                <a href="/foto_i_video/" title="Фото и видео"><span class="name">Фото и видео</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/foto_i_video/videokamery/" title="Видеокамеры"><span class="name">Видеокамеры</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/foto_i_video/obektivy/" title="Объективы"><span class="name">Объективы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/foto_i_video/fotoapparaty/" title="Фотоаппараты"><span class="name">Фотоаппараты</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/dd2/60_60_1/dd20ee65082105d4c99397322f5faa65.jpg" alt="Одежда" title="Одежда"></div>
                                <a href="/odezhda/" title="Одежда"><span class="name">Одежда</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/odezhda/zhenskaya_odezhda/" title="Женская одежда"><span class="name">Женская одежда</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/odezhda/muzhskaya_odezhda/" title="Мужская одежда"><span class="name">Мужская одежда</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/odezhda/detskaya_dlya_devochek/" title="Детская для девочек"><span class="name">Детская для девочек</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/odezhda/dlya_malchikov/" title="Детская для мальчиков"><span class="name">Детская для мальчиков</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/68a/60_60_1/68abf9f24d431e53afb99f8969987388.png" alt="Спортивные товары" title="Спортивные товары"></div>
                                <a href="/sport/" title="Спортивные товары"><span class="name">Спортивные товары</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/sport/veloryukzaki/" title="Велорюкзаки"><span class="name">Велорюкзаки</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu  has_img">
                                <div class="menu_img"><img src="/upload/resize_cache/iblock/b8d/60_60_1/b8dcfa49555502a5ad96065d1ad47910.png" alt="Электроинструмент" title="Электроинструмент"></div>
                                <a href="/elektroinstrument/" title="Электроинструмент"><span class="name">Электроинструмент</span><span class="arrow"><i></i></span></a>
                                <ul class="dropdown-menu toggle_menu">
                                    <li class="menu-item   ">
                                        <a href="/elektroinstrument/dreli/" title="Дрели" style="white-space: normal;"><span class="name">Дрели</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/elektroinstrument/perforatory/" title="Перфораторы" style="white-space: normal;"><span class="name">Перфораторы</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/elektroinstrument/shurupoverty/" title="Шуруповерты" style="white-space: normal;"><span class="name">Шуруповерты</span></a>
                                    </li>
                                    <li class="menu-item   ">
                                        <a href="/elektroinstrument/akkumulyatory/" title="Аккумуляторы" style="white-space: normal;"><span class="name">Аккумуляторы</span></a>
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
                <td class="menu-item dropdown" style="visibility: visible;">
                    <div class="wrap">
                        <a class="dropdown-toggle" href="/projects/">
                            <div>
                                Проекты									<div class="line-wrapper"><span class="line"></span></div>
                            </div>
                        </a>
                        <span class="tail"></span>
                        <ul class="dropdown-menu">
                            <li class="  ">
                                <a href="/projects/internet-magaziny/" title="Интернет-магазины"><span class="name">Интернет-магазины</span></a>
                            </li>
                            <li class="  ">
                                <a href="/projects/korporativnye-sayty/" title="Корпоративные сайты"><span class="name">Корпоративные сайты</span></a>
                            </li>
                            <li class="  ">
                                <a href="/projects/mobilnye-prilozheniya/" title="Мобильные приложения"><span class="name">Мобильные приложения</span></a>
                            </li>
                            <li class="  ">
                                <a href="/projects/bazovoe-seo/" title="Базовое SEO"><span class="name">Базовое SEO</span></a>
                            </li>
                            <li class="  ">
                                <a href="/projects/kontekstnaya-reklama/" title="Контекстная реклама"><span class="name">Контекстная реклама</span></a>
                            </li>
                            <li class="  ">
                                <a href="/projects/sotsialnye-seti/" title="Социальные сети"><span class="name">Социальные сети</span></a>
                            </li>
                        </ul>
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