$(".delete-photo").click(function(e) {

    e.preventDefault();

    var p_id = $(this).data('photo-id');
    var this_div = $(this);

    $.ajax({
        url: '/admin/projects/delete-photo',
        type: 'GET',
        data: { id: p_id },
        success: function() {
            this_div.parent().parent().remove();
        }
    });

});

$("#isVideo").click(function() {
    $("#form-video").toggle(this.checked);
});

$(".delete-slider-photo").click(function(e) {

    e.preventDefault();

    var p_id = $(this).data('photo-id');
    var this_div = $(this);

    $.ajax({
        url: '/admin/school/slider/delete',
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