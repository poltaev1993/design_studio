<!-- jQuery -->
<script src="/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<script src="/js/angular.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/sbadmin/dist/js/sb-admin-2.js"></script>

<script src="/js/image_upload.js"></script>
<script src="/js/app_admin.js"></script>

<script src="/js/vendor/froala/froala_editor.min.js"></script>

@if( Request::is('admin/control/*'))

    <script>
        $(function() {
            $('#post').editable({
                inlineMode: false,
                <?php
                    $url = '';
                    if (Request::is('admin/blog/*')) $url = '/admin/blog/saveimage';
                    if (Request::is('admin/reviews/*')) $url = '/admin/reviews/saveimage';
                    if (Request::is('admin/school/news/*')) $url = '/admin/school/news/saveimage';
                    if (Request::is('admin/school/categories/*')) $url = '/admin/school/categories/saveimage';
                    if (Request::is('admin/about/*')) $url = '/admin/about/saveimage';
                ?>
                imageUploadURL: '{{ $url }}'
            })
            .on('editable.imageError', function (e, editor, error) {
                // Custom error message returned from the server.
                if (error.code == 0) { alert('error 0'); }

                // Bad link.
                else if (error.code == 1) { alert('error 1'); }

                // No link in upload response.
                else if (error.code == 2) { alert('error 2'); }

                // Error during image upload.
                else if (error.code == 3) { alert('error 3'); }

                // Parsing response failed.
                else if (error.code == 4) { alert('error 4'); }

                // Image too text-large.
                else if (error.code == 5) { alert('error 5'); }

                // Invalid image type.
                else if (error.code == 6) { alert('error 6'); }

                // Image can be uploaded only to same domain in IE 8 and IE 9.
                else if (error.code == 7) { alert('error 7'); }
            });
        });
    </script>
@endif

<script>
    // Script for removing "Unlicensed Froala Editor" notification of WYSISYG editor
    $(document).ready(function() {
        $('a').filter(function() {
            return $(this).text() === "Unlicensed Froala Editor"; }
        ).remove();
    });
</script>

<script>
    // Sortable functions
    $( "#sortable" ).sortable({
        stop: function ( event, ui){
            var data = $(this).sortable('toArray', { attribute: 'id'});
            sortCategories(data);
        }
    }).disableSelection();

    $( "#sortable-data" ).sortable({
        stop: function ( event, ui){
            var data = $(this).sortable('toArray', { attribute: 'id'});
            sortData(data);
        }
    }).disableSelection();

    function sortCategories(sort) {
        $.ajax({
            type: 'GET',
            url: '/admin/categories/new-sort',
            data: { sort: sort.toString() },
            error: function() {
                alert('Что-то пошло не так. Пожалуйста, перезагрузите страницу и попробуйте еще раз...');
            }
        });
    }

    function sortData(sort) {
        $.ajax({
            type: 'GET',
            url: window.location.pathname + '-new',
            data: { sort: sort.toString() },
            error: function() {
                alert('Что-то пошло не так. Пожалуйста, перезагрузите страницу и попробуйте еще раз...');
            }
        });
    }
</script>