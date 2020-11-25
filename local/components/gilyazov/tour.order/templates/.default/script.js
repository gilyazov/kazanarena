function setTimeOptions(dateText){
    var today = new Date();
    if (dateText === today.toLocaleDateString()){
        let hours = today.getHours();
        if (hours >= 9){
            for (let i=9; i<= (hours + 1); i++){
                $("#TIME option[value=" + i + "]").attr('disabled', 'disabled');
            }
        }
    }
    else{
        for (let i=9; i< 20; i++){
            $("#TIME option[value=" + i + "]").removeAttr('disabled');
        }
    }
    $('#TIME').trigger('refresh');
}
BX.ready(function () {
    let itemSelected = 'adult';
    BX.bindDelegate(
        document.body, 'click', {className: 'js-buy-btn' },
        function(event){
            event.preventDefault();
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
        input: BX('PHONE')
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
        firstDay: 1,
        beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('dd.mm.yy', date);
            return [ weekDays.indexOf(string) == -1 ]
        },
        onSelect: function(dateText) {
            setTimeOptions(dateText);
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

    $('.number input').change(function (){
        let sum = 0
        let basketText = ''
        $('.number input').each(function (){
            sum += this.value * $(this).data('sum')
        })

        if (sum < 2000){
            $('.js-basket').html('<strong>Групповой тур* — 2000руб.</strong><small>*минимальная стоимость тура 2000руб.</small>');
        }
        else{
            $('.number input').each(function (){
                basketText += $(this).data('text') + ' на сумму <strong>' + this.value * $(this).data('sum') + 'руб.</strong><br>'
            })
            $('.js-basket').html(basketText)
        }

    });
});


