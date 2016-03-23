function deletePhoto(item, slug, type) {

    var p_id = $(item).data('photo-id');
    var item_div = $(item);

    $.ajax({
        url: '/admin/control/' + slug + '/' + type + '/delete-photo',
        type: 'GET',
        data: { id: p_id },
        success: function() {
            item_div.parent().parent().remove();
        },
        error: function(message) {
            console.log(message);
        }
    });

}

$("#isVideo").click(function() {
    $("#form-video").toggle(this.checked);
});

$(".delete-slider-photo").click(function(e) {

    e.preventDefault();

    var p_id = $(this).data('photo-id');
    var this_div = $(this);

    $.ajax({
        url: window.location.pathname + '/delete',
        type: 'GET',
        data: { id: p_id },
        success: function() {
            this_div.parent().parent().parent().remove();
        }
    });

});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
