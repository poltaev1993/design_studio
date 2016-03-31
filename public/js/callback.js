$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('input[name=_token]').val()
    }
});

$('#submit-callback').click(function(e) {

    e.preventDefault();

    var name = $('input[name=callback_name]').val();
    var phone = $('input[name=callback_phone]').val();
    var slug = $('#category_slug').val();

    $.ajax({
        method: 'POST',
        url: 'page/callback-request',
        data: {name: name, phone: phone, slug: slug}
    })
    .done(function( html ) {
        $("#callback-toggle").html(html);
    });
});
