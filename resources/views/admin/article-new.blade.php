@extends('admin.layout.master')

{{-- title --}}
@section('title')Add a New Article - Course You Can CMS @stop

{{-- style --}}
@section('style')
<!-- DATATABLES-->
<link rel="stylesheet" href="{{asset('admin/vendor/chosen_v1.2.0/chosen.min.css')}}">
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
<form action="article" method="post">
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">New Article</div>
        <!-- <div class="alert alert-success"> <em class="fa fa-check fa-lg fa-fw"></em>
            <span>
                Well done!
            </span>
        </div> -->
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type="text" name="title" placeholder="Article title..." class="mb-lg form-control input-lg">
                        <span class="help-block m-b-none mb-lg">
                            Permalink: {!! URL::to('admin/articles') !!}/<input id="url" name="link" href="#" data-type="text" data-pk="1" data-title="Edit Article URL" value="" /> &nbsp;
                        </span>
                        <textarea id="edit" name="content"></textarea>
                        <div class="mb-lg"></div>
                        <hr>
                        <h4 class="mb-lg">SEO Metadata</h4>
{{--                             <div class="form-group">
                            <p>Title</p>
                            <input type="text" placeholder="Brief description.." class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <p>Keywords</p>
                            <input type="text" name="keywords" placeholder="Keywords..." class="form-control">
                        </div>
                        <div class="form-group">
                            <p>Description</p>
                            <textarea rows="5" name="description" placeholder="Max 255 characters..." class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn btn-primary m-t-10 pull-right">
                                <em class="fa fa-check fa-fw"></em> Publish
                            </button>
                        </div>
                        @include('admin.partials.errors')
                    </div>
                </div>
            </div>
            <!-- Article sidebar-->
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Format
                        <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                            <em class="fa fa-minus"></em>
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="radio c-radio">
                            <label>
                                <input type="radio" name="a" value="option1">
                                <span class="fa fa-circle"></span> Option one
                            </label>
                        </div>
                        <div class="radio c-radio">
                            <label>
                                <input type="radio" name="a" value="option1">
                                <span class="fa fa-circle"></span> Option one
                            </label>
                        </div>
                        <div class="radio c-radio">
                            <label>
                                <input type="radio" name="a" value="option1">
                                <span class="fa fa-circle"></span> Option one
                            </label>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Categories
                        <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                            <em class="fa fa-minus"></em>
                        </a>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled categories">
                            <li>
                                <div class="checkbox c-checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="fa fa-check"></span> Categories1
                                    </label>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <span class="fa fa-check"></span> Categories1-1
                                            </label>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox c-checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        <span class="fa fa-check"></span> Categories1-1-1
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <span class="fa fa-check"></span> Categories1-2
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="checkbox c-checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="fa fa-check"></span> Categories2
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-default mb-lg" id="addNewCat">+ Add New Category</button>

                        <div id="addNewCatBox" style="display: none;">
                            <div class="mb-lg">
                                <input type="text" placeholder="Category name" class="form-control">
                            </div>
                            <div class="mb-lg">
                                <select name="account" class="form-control m-b" id="saveType">
                                    <option value="">— Parent Category —</option>
                                    <option value="1">Draft</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary mb-lg" id="saveCat">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
        return 'The changes you made will be lost if you navigate away from this page.';
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

    // //editables
    // $('#url').editable({
    //        url: '../admin/server/xeditable.res',
    //        type: 'text',
    //        pk: 1,
    //        name: 'url',
    //        title: 'Enter url'
    // });

    $('.chosen-select').chosen();
    // $('.wysiwyg').wysiwyg();
    $(function() {
        var hideAddNewCatBox = true;

        $('#edit').froalaEditor({
            toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'html'],
            heightMin: 400
        });

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