<?
CJSCore::Init(['masked_input']);
$this->addExternalCss("https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");
?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="w48 left">
    <div class="rightvacancyform" id="js_form_container" style="display: none">
        <h2>Купить билет на тур по стадиону</h2>
        <form action="" class="form clearfix" id="js_tour" method="post">
            <!--<dl class="lineForm ">
                <dt>
                    <label for="TICKET">Выбранный билет:<span class="red">*</span></label>
                </dt>
                <dd>
                    <label for="adult">
                        <input type="radio" id="adult" name="item" value="34654" checked>
                        Взрослый
                    </label>

                    <label for="child">
                        <input type="radio" id="child" name="item" value="34700">
                        Детский
                    </label>
                </dd>
            </dl>-->
            <dl class="lineForm ">
                <dt>
                    <label>Количество взрослых билетов</label>
                </dt>
                <dd>
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="text" data-sum="350" data-text="Взрослых билетов" name="count[34654]" value="1" size="5"/>
                        <span class="plus">+</span>
                    </div>
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label>Количество детских билетов</label>
                </dt>
                <dd>
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="text" data-sum="300" data-text="Детских билетов" name="count[34700]" value="0" size="5"/>
                        <span class="plus">+</span>
                    </div>
                </dd>
            </dl>
            <dl style="padding-bottom: 20px">
                <dt><label for="">Состав заказа:</label></dt>
                <dd class="js-basket">
                    <strong>Групповой тур* — 2000руб.</strong>
                    <small>*минимальная стоимость тура 2000руб.</small>
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label for="FIO">Ваше имя:<span class="red">*</span></label>
                </dt>
                <dd>
                    <input type="text" id="FIO" name="FIO" size="25" value="" required="" data-rule-required="true" data-msg-required="Заполните поле.">
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label for="PHONE">Телефон:<span class="red">*</span></label>
                </dt>
                <dd>
                    <input type="text" id="PHONE" name="PHONE" size="25" value="" required="" data-rule-required="true" data-msg-required="Заполните поле.">
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label for="EMAIL">Почта:<span class="red">*</span></label>
                </dt>
                <dd>
                    <input type="text" id="EMAIL" name="EMAIL" size="25" value="" required="" data-rule-required="true" data-msg-required="Заполните поле.">
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label for="DATE">Дата:<span class="red">*</span></label>
                </dt>
                <dd>
                    <input type="text"
                           id="DATE" name="DATE" size="25" value=""
                           required="" data-rule-required="true" data-msg-required="Заполните поле.">
                    <script>
                        var weekDays = [<?=implode(',', $arResult['weekDays'])?>]
                    </script>
                </dd>
            </dl>
            <dl class="lineForm ">
                <dt>
                    <label for="TIME">Время:<span class="red">*</span></label>
                </dt>
                <dd>
                    <select name="TIME" id="TIME">
                        <option value="">Выберите временной слот</option>
                        <?for ($i=9; $i<20; $i++):?>
                            <option value="<?=$i?>"><?=$i?>:00 - <?=($i+1)?>:00</option>
                        <?endfor;?>
                    </select>
                </dd>
            </dl>

            <dl class="lineForm inpFile2">
                 <dd>
                     <?$APPLICATION->IncludeComponent(
                         "bitrix:main.userconsent.request",
                         "",
                         array(
                             "ID" => 1,
                             "IS_CHECKED" => 'Y',
                             "AUTO_SAVE" => "Y",
                             "IS_LOADED" => $arParams["USER_CONSENT_IS_LOADED"],
                             "REPLACE" => array(
                                 'button_caption' => 'Купить',
                                 'fields' => array('Email', 'Телефон', 'Имя')
                             ),
                         )
                     );?>
                     <a href="#garanty" class="fancybox" style="padding-top: 10px;">Гарантия безопасности</a>
                </dd>
            </dl>

            <div class="formSend">
                <span class="btn2">
                    <input type="submit" name="orderSubmit" value="Купить">
                    <span class="inpleft"></span>
                    <span class="inpright"></span>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="w48 right" id="js_pay_form">
</div>

<div id="garanty" class="businessModal lightgreen">
    <div style="padding: 25px">
        <b>Уважаемый клиент!</b>
        <p>Вы можете оплатить свой заказ онлайн с помощью банковской карты через платежный сервис компании Uniteller. После подтверждения заказа Вы будете перенаправлены на защищенную платежную страницу Uniteller, где необходимо будет ввести данные для оплаты заказа. После успешной оплаты на указанную в форме оплаты электронную почту будет направлен электронный чек с информацией о заказе и данными по произведенной оплате.</p>

        <b>Гарантии безопасности</b>
        <p>Безопасность процессинга Uniteller подтверждена сертификатом стандарта безопасности данных индустрии платежных карт PCI DSS. Надежность сервиса обеспечивается интеллектуальной системой мониторинга мошеннических операций, а также применением 3D Secure - современной технологией безопасности интернет-платежей.</p>
        <p>Данные Вашей карты вводятся на специальной защищенной платежной странице. Передача информации в процессинговую компанию Uniteller происходит с применением технологии шифрования TLS. Дальнейшая передача информации осуществляется по закрытым банковским каналам, имеющим наивысший уровень надежности.</p>

        <b>Uniteller не передает данные Вашей карты магазину и иным третьим лицам!</b>
        <p>Если Ваша карта поддерживает технологию 3D Secure, для осуществления платежа, Вам необходимо будет пройти дополнительную проверку пользователя в банке-эмитенте (банк, который выпустил Вашу карту). Для этого Вы будете направлены на страницу банка, выдавшего карту. Вид проверки зависит от банка. Как правило, это дополнительный пароль, который отправляется в SMS, карта переменных кодов, либо другие способы.</p>
    </div>
</div>
