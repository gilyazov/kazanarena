<?php
echo '<pre>';
print_r($arResult);
echo '</pre>';
?>
<div class="w48 left">
    <div class="rightvacancyform">
        <h2>Купить билет на тур по стадиону</h2>
        <form action="" class="form clearfix">
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

