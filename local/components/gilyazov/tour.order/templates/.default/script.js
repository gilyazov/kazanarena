BX.ready(function () {

    let itemSelected = 'adult';
    BX.bindDelegate(
        document.body, 'click', {className: 'js-buy-btn' },
        function(event){
            event.preventDefault();

            itemSelected = BX.data(this, 'item');
            BX.adjust(BX(itemSelected), {props: {checked: true}});
            $('[name=item]').trigger('refresh');

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

    $('#js_tour input[type="radio"]').styler();
    $("#js_tour").validate();
});


