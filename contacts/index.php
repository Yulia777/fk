<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle( "Контакты" );
$APPLICATION->AddChainItem("Контакты", "/contacts/");?>

<? /*CNext::ShowPageType('page_contacts');*/ ?>
    <div class="maxwidth-theme">
        <div class="contacts-block">
            <div class="contacts-block__text">
                <div>
                    <h3>Контактная информация</h3>
                    <p><span>Телефон:</span> <a href="tel:+74912251585">+7 (4912) 25-15-85</a></p>
                    <p><span>Почта:</span> <a href="mailto:info@formulaklimata.ru">info@formulaklimata.ru</a></p>
                    <p><span>Адрес:</span> г. Рязань, Куйбышевское шоссе, д. 25</p>
                </div>
                <div>
                    <h3>Реквизиты</h3>
                    <p><span>Юридический адрес:</span> 390000, г. Рязань, ул. Чапаева, д. 57</p>
                    <p><span>Почтовый адрес:</span> 390047, г.Рязань, ул. Куйбышевское шоссе д.25</p>
                    <p><span>ИНН/КПП:</span> 6231055417/623401001</p>
                    <p><span>ОГРН:</span> 1026201264330</p>
                    <p><span>ОКПО:</span> 12201583</p>
                    <p><span>БАНК:</span> Рязанский филиал «АБ «РОССИЯ» г.Рязань</p>
                    <p><span>Р/С:</span> 40702810700020001611</p>
                    <p><span>К/С:</span> 30101810800000000738</p>
                    <p><span>БИК:</span> 046126738</p>
                </div>
            </div>
            <div class="contacts-block__image">
                <img class="contacts__banner"
                     alt="Sample Image"
                     src="http://i.imgur.com/I86rTVl.jpg">
            </div>
        </div>
        <div class="contacts-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A14233e33eb978d3bca44065cc284f6ef2ce7d4e8563e6c7b89ea757857ba994e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>


<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ); ?>