<!-- jQuery -->
<script src="/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/sbadmin/bower_components/raphael/raphael-min.js"></script>
<script src="/sbadmin/bower_components/morrisjs/morris.min.js"></script>

<script src="/js/vendor/sweetalert-dev.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/sbadmin/dist/js/sb-admin-2.js"></script>

<script src="/js/image_upload.js"></script>
<script src="/js/app_admin.js"></script>

@if( Request::is('admin/blog/*') || Request::is('admin/reviews/*') || Request::is('admin/school/*') || Request::is('admin/about/*'))
    <script src="/js/vendor/froala/froala_editor.min.js"></script>

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

@if( Request::is('admin/projects/sort') || Request::is('admin/blog/sort') || Request::is('admin/reviews/sort') || Request::is('admin/school/slider/sort') )

    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/angular-ui-sortable.js"></script>

    <script src="/js/admin/app-angular.js"></script>
    <script src="/js/admin/ProjectService.js"></script>
    <script src="/js/admin/BlogService.js"></script>
    <script src="/js/admin/ReviewService.js"></script>
    <script src="/js/admin/SliderService.js"></script>

    <script src="/js/admin/controllers/ProjectSortController.js"></script>
    <script src="/js/admin/controllers/BlogSortController.js"></script>
    <script src="/js/admin/controllers/ReviewSortController.js"></script>
    <script src="/js/admin/controllers/SliderSortController.js"></script>

@endif
{{--
<span id="_zero_65127">
    <noscript>
        <a href="http://zero.kz/?s=65127" target="_blank">
        <img src="http://c.zero.kz/z.png?u=65127" width="88" height="31" alt="ZERO.kz" />
        </a>
    </noscript>
</span>--}}
    
<!-- ZERO.kz
<script type="text/javascript"><!--
    var _zero_kz_ = _zero_kz_ || [];
    _zero_kz_.push(["id", 65127]);
    _zero_kz_.push(["type", 1]);

    (function () {
        var a = document.getElementsByTagName("script")[0],
        s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = (document.location.protocol == "https:" ? "https:" : "http:")
        + "//c.zero.kz/z.js";
        a.parentNode.insertBefore(s, a);
    })(); //
</script>
End ZERO.kz -->