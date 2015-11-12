@extends('admin.layout.master')

{{-- title --}}
@section('title')Add a New Page - Course You Can CMS @stop

{{-- style --}}
@section('style')
<!-- DATATABLES-->
<link rel="stylesheet" href="{{asset('admin/vendor/chosen_v1.2.0/chosen.min.css')}}">
<link rel="stylesheet" href="http://localhost/repo/project/courseyoucan/static-pages/dist/css/bootstrap.css">
<!-- XEDITABLE-->
<link rel="stylesheet" href="{{asset('admin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/froala_editor.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/froala_style.min.css')}}">
<!-- Include Editor Plugins style. -->
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/char_counter.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/code_view.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/colors.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/file.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/fullscreen.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/image.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/line_breaker.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/table.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendor/wysiwyg-editor/css/plugins/video.css')}}">
@stop

{{-- container --}}
@section('container')
<section>
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">New Page</div>
        <!-- <div class="alert alert-success"> <em class="fa fa-check fa-lg fa-fw"></em>
        <span>Well done!</span>
    </div>
    -->
    <div class="row">
        <!-- Page Content-->
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form>
                        <input type="text" name="article-title" placeholder="Article title..." class="mb-lg form-control input-lg">
                        <span class="help-block m-b-none mb-lg">
                            Permalink: {!! URL::to('admin/articles') !!}/
                            <a id="url" href="#" data-type="text" data-pk="1" data-title="Edit Article URL">superuser</a>
                            &nbsp;
                        </span>
                        <div class="edit-box courses" id="edit">
                            <div class="container main">
                                <h2 class="title">
                                    View All 2015-16 Courses
                                    <br>
                                    <span> <i class="fa fa-angle-down"></i>
                                    </span>
                                </h2>

                                <div class="catalog-title">
                                    <h2>Business Courses</h2>
                                </div>

                                <div class="courses-list">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." /></a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">
                                                    <a href="#">Diploma of Business</a>
                                                </h3>
                                                <p>
                                                    <a href="#">
                                                        Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                    </a>
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">Diploma of Business</h3>
                                                <p>
                                                    Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">Diploma of Business</h3>
                                                <p>
                                                    Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="catalog-title">
                                    <h2>Business Courses</h2>
                                </div>

                                <div class="courses-list">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">Diploma of Business</h3>
                                                <p>
                                                    Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">Diploma of Business</h3>
                                                <p>
                                                    Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="http://localhost/repo/project/courseyoucan/static-pages/dist/images/courses-page-item.jpg" height="195" width="286" alt="..." />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading">Diploma of Business</h3>
                                                <p>
                                                    Our business course will give you the confidence you need to succeed in a wide range of business roles, or to start your own business.
                                                </p>
                                                <p>
                                                    <a href="#" class="btn btn-success" role="button">View Now</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="container-full enquiry-bg">
                                <div class="container-full enquiry">
                                    <div class="container text-center"> <strong>We Love Enquiries</strong>
                                        <p>
                                            Get In Touch Today and <b>Gain A Nationally Recognised Qualification!</b>
                                        </p>
                                        <br>
                                        <p>
                                            Upgrading Your Skills to Improve <b>Your Future Job Prospects</b>
                                            or
                                        </p>
                                        <p>
                                            Gaining Modern Knowledge to
                                            <b>Start Your Own business!</b>
                                        </p>
                                        <br>
                                        <br>
                                        <p>
                                            <a href="tel:1300427670" class="btn btn-outline">1300 427 670</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-pink" data-toggle="modal" data-target="#enquiryForm">
                                                Send Enquiry <i class="fa fa-chevron-circle-right"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mb-lg"></div>
                        <hr>
                        <h4 class="mb-lg">SEO Metadata</h4>
                        <div class="form-group">
                            <p>Title</p>
                            <input type="text" placeholder="Brief description.." class="form-control"></div>
                        <div class="form-group">
                            <p>Keywords</p>
                            <input type="text" placeholder="Keywords..." class="form-control"></div>
                        <div class="form-group">
                            <p>Description</p>
                            <textarea rows="5" placeholder="Max 255 characters..." class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Page sidebar-->
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Page Attributes
                    <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                        <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="panel-body">
                    <div class="mb-lg">
                        Template
                        <select name="account" class="form-control m-b" id="saveType">
                            <option value="">Default Template</option>
                            <option value="">Draft</option>
                        </select>
                    </div>
                    <div class="mb-lg">
                        Parent
                        <select name="account" class="form-control m-b" id="saveType">
                            <option value="">(no parent)</option>
                            <option value="">Draft</option>
                        </select>
                    </div>
                    <div class="mb-lg">
                        Order
                        <select name="account" class="form-control m-b" id="saveType">
                            <option value="">(no parent)</option>
                            <option value="">Draft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Publish
                    <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right"> <em class="fa fa-minus"></em>
                    </a>
                </div>
                <div class="panel-body">
                    <div class="mb-lg">
                        Status
                        <select name="account" class="form-control m-b" id="saveType">
                            <option value="1">Pending Review</option>
                            <option value="2">Draft</option>
                        </select>
                    </div>

                    <div class="clearfix">
                        <button type="button" id="saveBtn" class="btn btn-default m-t-10 pull-left">Save as Pending</button>
                        <button type="button" class="btn btn-default m-t-10 pull-right">Preview</button>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="clearfix">
                        <button type="button" class="btn btn-danger m-t-10 pull-left">
                            <em class="fa fa-trash-o fa-fw"></em>
                            Move to Trash
                        </button>
                        <button type="button" class="btn btn-primary m-t-10 pull-right">
                            <em class="fa fa-check fa-fw"></em>
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop

{{-- script --}}
@section('script')
<!-- XEDITABLE-->
<script src="{{asset('admin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
<!-- Include JS files. -->
<script src="{{asset('admin/vendor/wysiwyg-editor/js/froala_editor.min.js')}}"></script>
<!-- Include Plugins. -->
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/align.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/char_counter.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/code_view.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/colors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/entities.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/file.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/font_family.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/font_size.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/fullscreen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/image.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/image_manager.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/inline_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/line_breaker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/link.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/lists.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/paragraph_format.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/paragraph_style.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/quote.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/table.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/save.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/url.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendor/wysiwyg-editor/js/plugins/video.min.js')}}"></script>
<!-- CHOSEN-->
<script src="{{asset('admin/vendor/chosen_v1.2.0/chosen.jquery.min.js')}}"></script>
<script>
    $(window).bind('beforeunload',function(){
        // return 'The changes you made will be lost if you navigate away from this page.';
    });
    // Font Awesome support
    $.fn.editableform.buttons =
      '<button type="submit" class="btn btn-primary btn-sm editable-submit">'+
        '<i class="fa fa-fw fa-check"></i>'+
      '</button>'+
      '<button type="button" class="btn btn-default btn-sm editable-cancel">'+
        '<i class="fa fa-fw fa-times"></i>'+
      '</button>';

    //defaults
    // $.fn.editable.defaults.url = '../server/xeditable.res';

    //editables 
    $('#url').editable({
           url: '../admin/server/xeditable.res',
           type: 'text',
           pk: 1,
           name: 'url',
           title: 'Enter url'
    });
    
    $('.chosen-select').chosen();
    // $('.wysiwyg').wysiwyg();
    $(function() {
        var hideAddNewCatBox = true;

        // $('#edit').froalaEditor({
        //     enter: $.FroalaEditor.ENTER_P
        // }).on('froalaEditor.contentChanged', function (e, editor) {
        //     $('#preview').html(editor.html.get());
        // })
         $('div#edit').froalaEditor({
            toolbarInline: true,
            charCounterCount: false,
            toolbarButtons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '-', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent', '-', 'insertImage', 'insertLink', 'insertFile', 'insertVideo', 'undo', 'redo'],
            toolbarVisibleWithoutSelection: true
        })

        $('#saveType').change(function(){
            var val = parseInt($('#saveType').val());
            if (val === 1) {
                $('#saveBtn').text('Save as Pending');
            } else if(val === 2){
                $('#saveBtn').text('Save as Draft');
            }
        });

        $('#addNewCat').click(function(){
            hideAddNewCatBox = !hideAddNewCatBox;
            if (hideAddNewCatBox) {
                $('#addNewCatBox').hide();
            } else {
                $('#addNewCatBox').show();
            }
        });
    });
</script>
@stop