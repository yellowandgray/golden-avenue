function submitForm1(id) {
    if (validForm(id)) {
        var data = {data: []};
        $('#' + id + ' .field').each(function (key, ele) {
            var value = $.trim($(ele).val());
            var label = $(ele).data('emaillabel');
            data.data.push({value: value, label: label});
        });
        $('.form-loader').removeClass('hidden');
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "index-form.php",
            data: data,
            success: function (response) {
                $('.form-loader').addClass('hidden');
                if (response.error === false) {
                    $('.submit-response').html(response.message).fadeOut(5000);
                    $('.field').each(function (key, ele) {
                        $(ele).val('');
                    });
                }
            }
        });
    }
    return false;
}

function validForm(id) {
    var msg = '';
    $('#' + id + ' .mandatory').each(function (key, ele) {
        if ($.trim($(ele).val()) === '') {
            msg = $(ele).data('message');
            return false;
        }
    });
    if (msg !== '') {
        alert(msg);
        return false;
    } else {
        return true;
    }
}