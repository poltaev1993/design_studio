function showPreview(item)
{

    if (item.files && item.files[0]) {
        var reader = new FileReader();
        var image  = new Image();
        reader.onload = function (e) {

            image.src = e.target.result;

            image.onload = function() {}

            $(item).parent().find('img').attr('src', e.target.result);
            $(item).parent().find('.upload-icon-button').addClass('uploaded');
            $(item).parent().find(".delete-photo").show();

        }
        reader.readAsDataURL(item.files[0]);
    }
}

$("#add-photo").click(function() {

    var new_photo = '<div class="col-md-6"><img src="/img/upload_photo.png" class="upload-icon-preview img-responsive" /><input type="file" name="photos[]" class="form-control" accept="image/*" required onchange="showPreview(this)"></div>';

    $(".photos-section").append(new_photo);

});

$("#add-slider").click(function() {

    var new_photo = '<div class="col-md-4"><div class="text-center"><img src="/img/upload_photo.png" class="upload-icon-preview" /></div><input type="file" name="photos[]" class="form-control" accept="image/*" required onchange="showPreview(this)"></div>';

    $(".photos-section").append(new_photo);

});
