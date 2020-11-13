BX.ready(function () {

    let itemSelected = 'adult';
    BX.bindDelegate(
        document.body, 'click', {className: 'js-buy-btn' },
        function(event){
            event.preventDefault();

            /*itemSelected = BX.data(this, 'item');
            BX.adjust(BX(itemSelected), {props: {checked: true}});
            $('[name=item]').trigger('refresh');*/

            BX.show(BX('js_form_container'));
        }
    );

    let form = BX('js_tour');
    BX.bind(form, 'submit', function(event) {
        event.preventDefault();

        BX.ajax.runComponentAction(
            'gilyazov:tour.order',
            'createOrder', {
                mode: 'class',
                data: {post: BX.ajax.prepareForm(form).data},
            }).then(function(response) {
                if (response.status === 'success') {
                    BX.adjust(BX('js_pay_form'), {html: response.data.html});
                }
            }
        );
    });

    $('#js_tour input[type="radio"], #js_tour input[type="checkbox"], #js_tour select').styler();
    new BX.MaskedInput({
        mask: '+7 999 999 99 99', // устанавливаем маску
        input: BX('PHONE'),
        placeholder: '_' // символ замены +7 ___ ___ __ __
    });
    new BX.MaskedInput({
        mask: '99.99.9999', // устанавливаем маску
        input: BX('DATE'),
        placeholder: '_'
    });
    $('#DATE').datepicker({
        minDate: '0',
        maxDate: '+3D',
        dateFormat: 'dd.mm.yy',
        beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('dd.mm.yy', date);
            return [ weekDays.indexOf(string) == -1 ]
        }
    });
    $("#js_tour").validate();

    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});


